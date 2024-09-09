<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebPageConfigController extends Controller
{
    protected $configPathBn = 'lang/bn/web_page.php'; // Path to the configuration file
    protected $configPathEn = 'lang/en/web_page.php'; // Path to the configuration file

    // Function to read the configuration file and return its contents
    public function index(Request $request)
    {
       if($request->lang == 'bn')
       {
           $config = include base_path($this->configPathBn);
         }else{
            $config = include base_path($this->configPathEn);
       }
        return response()->json($config); // Return as JSON for the UI to consume
    }

    // Function to update the configuration file
    public function update(Request $request)
    {
        $data = $request->all(); // Get the updated data from the request

        // Convert the data to PHP array format for saving
        $configData = "<?php\nreturn " . var_export($data, true) . ";\n";

        // Save the updated data back to the file
        file_put_contents(base_path($this->configPathEn), $configData);

        return response()->json(['status' => 'success']);
    }
}
