<style>
.center{
    width:800px; height:900px; padding:20px; text-align:center; border: 10px solid #673AB7;    margin-left: 21%;
}

.inner-dotted-border{
    width:750px; height:850px; padding:20px; text-align:center; border: 5px solid #673AB7;border-style: dotted;
}

.certification{
    font-size:50px; font-weight:bold;    color: #663ab7;
}

.certify{
    font-size:25px;
}

.name{
    font-size:30px;    color: green;
}

.fs-30{
    font-size:30px;
}

.fs-20{
    font-size:20px;
}

</style>

<?php 
include('../layouts/header.php'); 
// include('../layouts/menu.php'); 
include ('../controllers/participantController.php');
$participant = getParticipantDetail();
// dd($participants);
?>
<div class="main-content">
    <div class="container">
        <div class="center">
            <div class="inner-dotted-border">
                <span class="certification">Certificate of Completion</span>
                <br><br>
                <img src="../assets/UiTM.png" class="default" style="width: 120px; height: 110px; border: 2px solid #A9A9A9; background-color: #A9A9A9;" alt="Avatar"/><br>
                <img src="../assets/Canvajer.png" class="default" style="width: 120px; height: 110px; border: 2px solid #A9A9A9; background-color: #A9A9A9;" alt="Avatar"/><br>
                <span class="certify"><i>Canva Jer</i></span>
                <br><br>
                <span class="name"><b><?= $participant['part_fullname'] ?></b></span><br/><br/>
                <span class="certify"><i><?= $participant['part_ic'] ?></i></span> <br/><br/>
                <span class="fs-30"><?= $participant['part_email'] ?></span> <br/><br/>
                <span class="fs-20"><?= $participant['part_age'] ?><b></b></span> <br/><br/><br/><br/>
                <span class="certify"><i><?= $participant['part_gender'] ?></i></span><br>
                <span class="fs-30"><?= $participant['part_phone'] ?></span>
            </div>
        </div>
    </div>
</div><br><br><br>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
        window.onload = function() {
            window.print();
            setTimeout(function() {
                window.close();
            }, 500);
        };
    window.onload = function() {
        var link = document.createElement('a');
        link.href = 'your-file.pdf';
        link.download = 'filename.pdf';
        link.click();
    };

    </script>

<script>
    window.onload = function() {
        window.print();
        setTimeout(function() {
            window.history.back();
        }, 500);
    };
</script>



<?php include('../layouts/footer.php'); ?>
        

  