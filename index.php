<style>
.show{
    color:red;
}
</style>

<?php 

    
 $json = '{
 "number":
 {
     "a":1,
     "b":2,
     "c":3,
     "d":4

 }
 }'.",";

//  $json4 = '{"user":{

//  }}'
 $json2 = '{"user":{
     "name":"jon",
     "surname":"jons"}}'.","; 
 $json3 = '{
        "name":"gog",
        "surname":"gogvic"
    }'.","; 
$txt = "other text";
// "." this mean this directory
// ".." this mean parent directory
  $scan = scandir(".");
// var_dump($scan);

echo "<br>";
if(is_file("text.txt"))://we can check 
$file = fopen("text.txt","r");

      while(!feof($file))://it`s mean if dont finish file! read this ok???ok ok\\\ (check empty file)
        //if dont  something for show this stoping
        echo "<span class='show'>";
        echo fgetc($file);//here get this ?syntex this show our file
        echo "</span>";
      endwhile; 
    //   die;
    endif;
       
      
// fclose($file);//finish
    
//     else:
//         echo "notfond";
//     endif;




// die;
// check next lesson
//  $myjsonfile = json_encode($myjsonfile);//convert file object  to json 
//open json file

//  $myjson = "myjson.json";

//  $file = fopen($myjson,"a");
//               fwrite($file,$json3);//we can write only string


//     fclose($file);//finish

    



 echo "<br>";

 $myjsonfile = file_get_contents("myjson.json");
 //open file json
  $myjsonfile = "[".$myjsonfile."]";
 $data = json_decode($myjsonfile);//convert json  to object
//  dd($data);
    foreach($data as $key => $value) {
        if (!empty($value->user)) {
            echo $value->user->name;
           }
    
     //i think because array inside array so we cant foreach
}


// die;
 //record file
if(file_exists('myjson1.json') && !empty($json2)){
     
    //we check  we have this file
    $myjson = "myjson1.json";
    $file = fopen($myjson,"a");

    fwrite($file,$json2).",";
    fclose($file);
    // $myjsonfile = json_decode()
 //echo  filesize($myjson ); //this length your file
//  echo filetype($myjson); // this type
//  unlink($myjson); //delete
 // copy($myjson,"newjson.json");//copy file /here ??

}


//





?>