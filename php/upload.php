<?php
    if(isset($_POST['submit'])){

        //We create a global variable for the photo
        $file = $_FILES['foto1'];

        //We get all of the file data
        $fileName = $_FILES['foto1']['name'];
        $fileTmpName = $_FILES['foto1']['tmp_name'];
        $fileSize = $_FILES['foto1']['size'];
        $fileError = $_FILES['foto1']['error'];
        $fileType = $_FILES['foto1']['type'];

        //We separate the extension of the file name name . jpg
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        
        //We type the allowed extensions
        $allowed = array('jpg', 'jpeg', 'png');

        //If the extension is allowed
        if(in_array($fileActualExt, $allowed)){
            //We check if there were any errors with the file upload
            if($fileError === 0){
                //We set the size of the file
                if($fileSize < 500000){
                    //We make the name of the file unique
                    $fileNameNew = uniqid('', true) . "." . $fileActualExt;

                    //We select the place to upload it
                    $fileDestintion = '../uploads/' . $fileNameNew;

                    //We upload the file
                    move_uploaded_file($fileTmpName, $fileDestintion);

                    echo "Success";
                }else{
                    echo "The file is too heavy";
                }
            }else{
                echo "There was an error uploading your file";
            }
        }else{
            echo "Wrong type of file";
        }


    }

?>