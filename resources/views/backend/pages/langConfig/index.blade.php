@extends('backend.layouts.app')
@section('title', 'Home')
@section('content')
    <div class="container">
        <h2>Web Page Configuration</h2>
        <form id="configForm" method="POST" action="{{ route('config.update') }}">
            @csrf
            
            <div class="form-group">
                <label for="languageSelect">Select Language:</label>
                <select id="languageSelect" class="form-control">
                    <option value="en">English</option>
                    <option value="bn">Bangla</option>
                </select>
            </div>
            
            <div id="configFields">
                <!-- Configuration fields will be dynamically loaded here via JavaScript -->
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
@endsection

@section('add_scripts')
    <script>
        // Recursive function to render form fields for objects and arrays
        function renderConfigFields(config, parentKey = '') {
            let configFields = '';

            for (const key in config) {
                if (config.hasOwnProperty(key)) {
                    const fullKey = parentKey ? `${parentKey}.${key}` : key;

                    // Hide fields where key is _token
                    if (key === '_token') {
                        configFields += `<input type="hidden" name="${fullKey}" id="${fullKey}" value="${config[key]}">`;
                    } else if (typeof config[key] === 'object' && !Array.isArray(config[key])) {
                        // Recursively render nested objects
                        configFields += `<fieldset>
                                            <legend>${key}</legend>
                                            ${renderConfigFields(config[key], fullKey)}
                                        </fieldset>`;
                    } else if (Array.isArray(config[key])) {
                        // Handle arrays: Create multiple input fields for array elements
                        configFields += `<fieldset>
                                            <legend>${key} (Array)</legend>`;
                        config[key].forEach((value, index) => {
                            const arrayKey = `${fullKey}[${index}]`;
                            configFields += `<div class="form-group">
                                                <label for="${arrayKey}">${key} [${index}]</label>
                                                <input type="text" name="${arrayKey}" id="${arrayKey}" value="${value}" class="form-control">
                                            </div>`;
                        });
                        configFields += `</fieldset>`;
                    } else {
                        // Render input field for strings, numbers, etc.
                        configFields += `<div class="form-group">
                                            <label for="${fullKey}">${key}</label>
                                            <input type="text" name="${fullKey}" id="${fullKey}" value="${config[key]}" class="form-control">
                                        </div>`;
                    }
                }
            }
            return configFields;
        }

        // Function to fetch and render the configuration based on selected language
        function fetchConfig(language) {
            fetch(`{{ route('config.index') }}?lang=${language}`)
                .then(response => response.json())
                .then(data => {
                    const configFields = renderConfigFields(data);
                    document.getElementById('configFields').innerHTML = configFields;
                })
                .catch(error => console.error('Error fetching configuration:', error));
        }

        // Fetch the configuration when the language dropdown is changed
        document.getElementById('languageSelect').addEventListener('change', function() {
            const selectedLanguage = this.value;
            fetchConfig(selectedLanguage);
        });

        // Initial fetch with default language 'en'
        fetchConfig('en');

        // Handle form submission
        document.getElementById('configForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);
            const configData = {};

            formData.forEach((value, key) => {
                const keys = key.split('.');
                keys.reduce((acc, curr, idx) => {
                    if (idx === keys.length - 1) {
                        acc[curr] = value;
                    } else {
                        acc[curr] = acc[curr] || {};
                    }
                    return acc[curr];
                }, configData);
            });

            fetch('{{ route('config.update') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(configData)
            })
                .then(response => response.json())
                .then(data => {
                    alert('Configuration updated successfully!');
                })
                .catch(error => console.error('Error updating configuration:', error));
        });
    </script>
@endsection
