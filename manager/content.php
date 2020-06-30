<?php
if(isset($_POST["n"])){
    $page_name = $_POST["n"];////this name our page ok?
    
}
?>

<?php
// open
$search_name = opendir($page_name); //we open this directory
if($search_name==true):// it`s mean if we have this directory  ok>?  
while(($file = readdir($search_name))!==false)://we already read our folder
    // why do you need readdir
    // what is the different between  opendir and readdir
if($file != "." && $file !=".."):
?>   

<input type="submit" class="subfile" name="filepost" value="<?php  echo  $page_name."/".$file ?>"> 

<script src="script.js"></script>
<?php 
//close
endif;
endwhile;
   endif;   
   closedir($search_name);
?>











<?php
die;

// if(!empty($_POST['n'])){

//     // $scan = scandir(".");
//     // foreach($scan as $key=>$value){
//     //          echo "<a href='$value'>$value</a>"."<br>";
//     //      }
//     // $scan = scandir(".");
// $a = $_POST['n'];
// $scan = scandir(".");

// if(in_array("$a",$scan)){
//     echo "<a href='$a'>$a</a>"."<br>";
// }else{
//     echo "This file doesn't content";
// }

//     // if(in_array($_POST['n']),$scan)

//     // $scan = scandir(".");
//     foreach($scan as $key=>$value){
//              echo "<a href='$value'>$value</a>"."<br>";
//          }

// }

//  $scan = scandir(".");
//  foreach($scan as $key=>$value){
//           echo "<a href='$value'>$value</a>"."<br>";
//       }
// if(!empty($_POST['n'])){
//     $a= $_POST['n'];
//     // echo $a;
//     // if(is_file("'/'.$a.'/'")){
//     //    echo "aa";
//     // }
//     // $file = fopen("$a","r");
//     $scan = scandir(".");
    // if(in_array("$a",$scan)){
        // foreach($scan as $key=>$value){
            // echo "<a href='$a'>$a</a>";
        // }

//         $dir ="$a";
//         if (is_dir($dir)){
//             if ($dh = opendir($dir)){
//               while (($file = readdir($dh)) !== false){
//                 echo "filename:" . $file . "<br>";
//               }
//               closedir($dh);
//             }
//           }
//         // if(file_exists($dir)){
//         //     alert("ok");
//         // }
//     //    readdir($a);
//         // if(file_exists("$a")){
//         //     echo "done";
//         // }
//         // else {
//         //     echo "This file doesn't have";
//         // }
//     }else{
//         echo "This file doesn't have";
//     }
// }
// $scan = scandir("..");
//     if(in_array($_POST['n']),$scan){
//         echo $_POST['n'];
//     }

// '/docs'
// $b = "file/";
// if(!empty($b)){
//     $scan = scandir($b);
//     var_dump($scan);
// }
// $scan = scanidr(".");
// $scan = scandir("..");

// if($scan != "." || $scan !=".."){
// foreach($scan as $key=>$value){
//     // if(is_file("$value")){
//     //     $file = fopen("$value","r");
//     //     while(!feof($file)):
//     //         echo "<span class='show'>";
//     //         echo fgetc($file);
//     //         echo "</span>";
//     //       endwhile; 
//     // // }
//     $a = "<a href='$value'>$value</a>"."<br>";
//     echo $a."<br>";
// }
// // return $a;

// // echo $value;

// }
    
// if(!empty($_POST['n'])){
//     $a= $_POST['n'];
//     echo $a;
//     // if(is_file("'/'.$a.'/'")){
//     //    echo "aa";
//     // }
//     // $file = fopen("$a","r");
//     if(in_array($a),$sca)
// }

    
    // echo fgetc($value);
   

    // $file = fopen("..","r");
 
// }
// // return $a;

// // echo $value;

// }




?>