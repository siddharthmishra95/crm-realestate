<?php
include '../database.php';
include 'sidebar.php';
include 'importent-css.php';
include 'importent-header.php';
?>



<?php

// table database name 

if (isset($_POST['submit'])){

  $slider = $_FILES['slider'];
  $s_heading1 = $_POST['s_heading1'];
  $s_heading2 = $_POST['s_heading2'];
  $s_btn_text = $_POST['s_btn_text'];
  $s_btn_link = $_POST['s_btn_link'];

  // end table database name 


//   print_r($slider);

//start function image defult varibles  

//   $filename = $slider['name'];
//   $filepath = $slider['tmp_name'];
//   $fileerror = $slider['error'];

//   if($fileerror == 0){
    
//     $destfile = 'upload/'.$filename;
  
//     // echo "$destfile";

//     move_uploaded_fileß($_FILES['slider']['tmp_name'],$destfile);

// }

if(isset($_FILES['slider'])){

    $file_name = $_FILES['slider']['name'];
    $file_size = $_FILES['slider']['size'];
    $file_tmp = $_FILES['slider']['tmp_name'];
    $file_type = $_FILES['slider']['type'];

    if(move_uploaded_file($file_tmp, "upload/". $file_name)){
        echo "Successfully Uploaded.";
    }else{
            echo "cloud not be upload the file.";
    }


//end function image defult varibles 

//sql connection connect query start


//   $sql= mysqli_query($conn, "INSERT INTO d_slider (slider, s_heading1, s_heading2, s_btn_text, s_btn_link  ) 
//   values($slider, $s_heading1, $s_heading2, $s_btn_text, $s_btn_link)"); 

//   $_result=mysqli_query($conn, $sql);


//end sql connection connect query start

    $inserturey = "INSERT INTO d_slider (slider, s_heading1, s_heading2, s_btn_text, s_btn_link) values
     (
       '$slider' '$s_heading1', '$s_heading2', '$s_btn_text', '$s_btn_link' 
    )";

    $query = myqsli_query($conn, $inserturey );

    if($query){
        echo "inserted";
           } else
               {
               echo "inserted";
           }
      }

}
//  else{
  
//   echo "No Button has been Clicked";

// }



?>




<?php

// if(isset($_FILES['slider'])){

//     $file_name = $_FILES['slider']['name'];
//     $file_size = $_FILES['slider']['size'];
//     $file_tmp = $_FILES['slider']['tmp_name'];
//     $file_type = $_FILES['slider']['type'];

//     if(move_uploaded_file($file_tmp, "upload/". $file_name)){
//         echo "Successfully Uploaded.";
//     }else{
//             echo "cloud not be upload the file.";
//     }


// }

?>






                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Section</span> Sliders</h4>

                        <!-- Basic Layout & Basic with Icons -->
                        <div class="row">
                            <!-- Basic Layout -->
                            <div class="col-xxl">
                                <div class="card mb-4">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h5 class="mb-0">Slider Details</h5>

                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="manage-slider.php" enctype="multipart/form-data">
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="basic-default-name">Slide
                                                    Images</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" name="slider" id=""
                                                        placeholder="slider" />
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="basic-default-phone">First
                                                    Heading</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="s_heading1" class="form-control phone-mask"
                                                        placeholder="first heading" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="basic-default-phone">Secend
                                                    Heading</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="s_heading2" class="form-control phone-mask"
                                                        placeholder="Secend Heading" />
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="basic-default-phone">Button
                                                    Text</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="s_btn_text" class="form-control phone-mask"
                                                        placeholder="btn text" />
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="basic-default-phone">Button
                                                    Link</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="s_btn_link" class="form-control phone-mask"
                                                        placeholder="btn URL" />
                                                </div>
                                            </div>


                                            <div>
                                                <!-- <button type="submit" name="add_slider" class="btn btn-primary">Add
                                                    slider</button> -->
                                                <div>

                                                    <div class="row justify-content-end">
                                                        <div class="col-sm-10">
                                                            <button type="submit" name="submit"
                                                                class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

            <?php include 'manage-footer.php'; ?>