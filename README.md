## About Laravel
~~~
if(!function_exists('delete')){
    function delete(){
        $date = new DateTime;
        $date->modify('-2 minutes');
        $formatted = $date->format('Y-m-d H:i:s');
        User::where('created_at','<=',$formatted)->delete();
    }
}
~~~

Register In composer.json

~~~
"autoload-dev": {
        "psr-4": {
            "Tests\\": "tests/"
        },
        "files": [
            "app/Helpers/helpers.php"
        ]
    },
~~~