<?php
// $my_fill = fopen("ds.txt","w");



// fclose($my_fill);


// $my_fill = fopen("ds.txt","w");
// $myfill_name = "ds.txt";
// $my_fill - fopen($myfill_name, "r");

// $my_fil - filesize($my_filenane);
// $my_size =filesize(my_filename);
// $my_filedata = fread($my_file,$my_siz);

// feof we ues to print everthing in a file
// $file = fopen("ds.txt", "r");
// while(!feof($file)){
//     each fgets($file). "<br>"
// }
// fclose($file)

// fwrite makes us write new text in an existing file
// $myfile = fopen("ds.txt", "w");
// $my_text = "Digital School \n";
// fweite($my_file, $my_text);

// w+ mode lets us create a new file
// $h = fopen("data.txt", "w+");
// fwrite($h, "Test 1");

// a+ mode lets us write content in a file
// $h = fopen("data.text", "a+");
// fwrite($h "n add more lines to the file");
// flose($h);

// file_put_contents is identic to fopen(), fwrite(), fclose()
file_put_contents("test.txt","Add more text" );
echo file_get_contents(test.txt);
?>