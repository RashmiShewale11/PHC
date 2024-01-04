<?php
/**
 * Created by IntelliJ IDEA.
 * User: rashmi
 * Date: 2/3/19
 * Time: 3:03 PM
 */
//Include the database configuration file
include 'dbconfig.php';
$query = $connect->query("SELECT * FROM states WHERE status = 1 ORDER BY state_name ASC");

//Count total number of rows
$rowCount = $query->num_rows;
?>
<html>
<head>
    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.3/css/mdb.min.css" rel="stylesheet">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.3/js/mdb.min.js"></script>

</head>

<!--<script type="text/javascript">-->
<!--    $(document).ready(function(){-->
<!--        $('#state').on('change',function(){-->
<!--            var stateID = $(this).val();-->
<!--            if(stateID){-->
<!--                $.ajax({-->
<!--                    type:'POST',-->
<!--                    url:'ajaxData.php',-->
<!--                    data:'state_id='+stateID,-->
<!--                    success:function(html){-->
<!--                        $('#dist').html(html);-->
<!--                        $('#tal').html('<option value="">Select dist first</option>');-->
<!--                        $('#vil').html('<option value="">Select tal first</option>');-->
<!--                    }-->
<!--                });-->
<!--            }else{-->
<!--                $('#dist').html('<option value="">Select state first</option>');-->
<!--                $('#tal').html('<option value="">Select dist first</option>');-->
<!--            }-->
<!--        });-->
<!---->
<!--        $('#dist').on('change',function(){-->
<!--            var distID = $(this).val();-->
<!--            if(distID){-->
<!--                $.ajax({-->
<!--                    type:'POST',-->
<!--                    url:'ajaxData.php',-->
<!--                    data:'dist_id='+distID,-->
<!--                    success:function(html){-->
<!--                        $('#tal').html(html);-->
<!--                        $('#vil').html('<option value="">Select tal first</option>');-->
<!--                    }-->
<!--                });-->
<!--            }else{-->
<!--                $('#tal').html('<option value="">Select state first</option>');-->
<!--                $('#vil').html('<option value="">Select tal first</option>');-->
<!--            }-->
<!--        });-->
<!---->
<!--        $('#tal').on('change',function(){-->
<!--            var talID = $(this).val();-->
<!--            if(talID){-->
<!--                $.ajax({-->
<!--                    type:'POST',-->
<!--                    url:'ajaxData.php',-->
<!--                    data:'tal_id='+talID,-->
<!--                    success:function(html){-->
<!--                        $('#vil').html(html);-->
<!---->
<!--                    }-->
<!--                });-->
<!--            }else{-->
<!--                $('#vil').html('<option value="">Select tal first</option>');-->
<!--            }-->
<!--        });-->
<!--    });-->
<!--</script>-->
<!--<script>-->
<!--    $(function () {-->
<!--        $.validator.setDefaults({-->
<!--            highlight: function (element) {-->
<!--                $(element)-->
<!--                    .closest('.form-group')-->
<!--                    .addClass('has-error')-->
<!--            },-->
<!--            unhighlight: function (element) {-->
<!--                $(element)-->
<!--                    .closest('.form-group')-->
<!--                    .removeClass('has-error')-->
<!--            }-->
<!--        });-->
<!---->
<!--        $.validate({-->
<!--            rules:-->
<!--                {-->
<!--                    password: "required",-->
<!--                    birthDate: "required",-->
<!--                    weight: {-->
<!--                        required: true,-->
<!--                        number: true-->
<!--                    },-->
<!--                    height: {-->
<!--                        required: true,-->
<!--                        number: true-->
<!--                    },-->
<!--                    email: {-->
<!--                        required: true,-->
<!--                        email: true-->
<!--                    }-->
<!--                },-->
<!--            messages: {-->
<!--                email: {-->
<!--                    required: true,-->
<!--                    email: true-->
<!--                }-->
<!--            },-->
<!--            password: {-->
<!--                required: " Please enter password"-->
<!--            },-->
<!--            birthDate: {-->
<!--                required: " Please enter birthdate"-->
<!--            },-->
<!--            email: {-->
<!--                required: ' Please enter email',-->
<!--                email: ' Please enter valid email'-->
<!--            },-->
<!--            weight: {-->
<!--                required: " Please enter your weight",-->
<!--                number: " Only numbers allowed"-->
<!--            },-->
<!--            height: {-->
<!--                required: " Please enter your height",-->
<!--                number: " Only numbers allowed"-->
<!--            },-->
<!--        }-->
<!---->
<!--    });-->
<!--    })-->
<!--    ;-->
<!--    $('#materialIndeterminate2').prop('indeterminate', true);-->
<!--</script>-->

<style>
    body {
        /*background: url('https://static-communitytable.parade.com/wp-content/uploads/2014/03/rethink-target-heart-rate-number-ftr.jpg') fixed;*/
        background-size: cover;
    }

    *[role="form"] {
        max-width: 800px;
        padding: 15px;
        margin: 0 auto;
        border-radius: 0.3em;
        background-color: #f2f2f2;
    }

    *[role="form"] h2 {
        font-family: 'Open Sans', sans-serif;
        font-size: 40px;
        font-weight: 600;
        color: #000000;
        margin-top: 5%;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 4px;
    }


</style>

<body>
<div class="container">
    <form class="form-horizontal" role="form" action="insertsurvey.php" method="post" enctype="multipart/form-data">
        <h3><center>PHC Survey</center></h3>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">Date:
                </div>
                <div class="col-md-6">
                <input type="date" style="width: 200px;" name="date" id="date" placeholder="Todays Date" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">State:
                </div>
                <div class="col-md-6">
                    <select id="state" name="state" required>
                        <option value="">Select State</option>
                        <?php
                        if ($rowCount > 0) {
                            while ($row = $query->fetch_assoc()) {
                                echo '<option value="' . $row['state_id'] . '">' . $row['state_name'] . '</option>';
                            }
                        } ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="form-row">
                <div class="col-md-6">
                    <label>PHC Type:</label>
                </div>
                <div class="col-md-3">
                        <input name="phctype" id="phctype-yes" value="rural" type="radio" required/>Rural
                </div>
                <div class="col-md-3">
                        <input name="phctype" id="phctype-no" value="urban" type="radio" required/>Urban
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    Are PHC's providing 24/7 delivery facility:
                </div>
                <div class="col-md-3">
                    <input name="hours" id="hours-yes" value="yes" type="radio" required/>Yes
                </div>
                <div class="col-md-3">
                    <input name="hours" id="hours-no" value="no" type="radio" required/>No
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-6">Do PHC's organize any awarness camp:</div>
                <div class="col-md-3">
                    <input name="camp" id="camp-yes" value="yes" type="radio" required/>Yes
                </div>
                <div class="col-md-3">
                    <input name="camp" id="camp-no" value="no" type="radio" required/>No
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-6">Do PHC's conduct any training:</div>
                <div class="col-md-3">
                    <input name="training" id="training-yes" value="yes" type="radio" required/>Yes
                </div>
                <div class="col-md-3">
                    <input name="training" id="training-no" value="no" type="radio" required/>No
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-6">Are PHC's providing 24/7 water facility:</div>
                <div class="col-md-3">
                    <input name="water" id="water-yes" value="yes" type="radio" required/>Yes
                </div>
                <div class="col-md-3">
                    <input name="water" id="water-no" value="no" type="radio" required/>No
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-6">Are PHC premises clean:</div>
                <div class="col-md-3">
                    <input name="clean" id="clean-yes" value="yes" type="radio" required/>Yes
                </div>
                <div class="col-md-3">
                    <input name="clean" id="clean-no" value="no" type="radio" required/>No
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-6">Are there seperate toilets for men and women:</div>
                <div class="col-md-3">
                    <input name="sep_toilet" id="sep_toilet-yes" value="yes" type="radio" required/>Yes
                </div>
                <div class="col-md-3">
                    <input name="sep_toilet" id="sep_oilet-no" value="no" type="radio" required/>No
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-6">Are the experts available for delivery :</div>
                <div class="col-md-3">
                    <input name="experts" id="experts-yes" value="yes" type="radio" required/>Yes
                </div>
                <div class="col-md-3">
                    <input name="experts" id="experts-no" value="no" type="radio" required/>No
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-6">Are vaccination for women available at PHC's:</div>
                <div class="col-md-3">
                    <input name="vac_women" id="vac_women-yes" value="yes" type="radio" required/>Yes
                </div>
                <div class="col-md-3">
                    <input name="vac_women" id="vac_women-no" value="no" type="radio" required/>No
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-6">Are vaccination for children available at PHC's:</div>
                <div class="col-md-3">
                    <input name="vac_child" id="vac_child-yes" value="yes" type="radio" required/>Yes
                </div>
                <div class="col-md-3">
                    <input name="vac_child" id="vac_child-no" value="no" type="radio" required/>No
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-6">Are PHC's providing proper diet chart to pregnent women and children:</div>
                <div class="col-md-3">
                    <input name="diet" id="diet-yes" value="yes" type="radio" required/>Yes
                </div>
                <div class="col-md-3">
                    <input name="diet" id="diet-no" value="no" type="radio" required/>No
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="row">
                <div class="col-md-6">Over all Rating(1 for low and 5 for high)
                </div>
                <div class="col-md-6">
                    <select id="rate" name="rate" class="col-sm-4 mb-2" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-block" name="sur">Submit</button>
    </form>

</div>
</body>

</html>

