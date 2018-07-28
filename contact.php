<?php
include('includes/sitenav.php');
include('includes/ftaCoordModal.php');
include('includes/techSupportModal.php');
?>


  <div class="p-2 flex-fill custom-margin">
    <div class="display-4 custom-margin" align="center"> OmniBase Contacts</div>
      <div class="alert alert-primary shadow rounded"><h3 align="center">To look up outstanding offenses online, please go to the <br /> <a href="http://www.texasfailuretoappear.com">Texas Failure To Appear Website</a><h3></div>
      <div class="custom-margin" align="center"><h3> - OR - </h3></div>
      <div align="center">
        <h3>To call about outstanding offense information: </h3>
        <h3>Phone Number: (800) 686-0570<br /></h3>
      </div>
    </div>
    <div class="container">

    <div class="d-flex flex-row">
  <div class="p-2 flex-fill">
	<h3>Court Account Managers </h3>
    <p>Phone Number: (512) 346-6511 ext: 107 or 108<br />
      <form class="form-inline my-2 my-lg-0">
            <button type="button" class="btn btn-primary my-2 my-sm-0" data-toggle="modal" data-target="#techSupportModal">Contact Us</button>
      </form>
    <h3><br />
    </div>
    <div class="p-2 flex-fill">
      <h3>FTA Coordinator </h3>
    <p>Phone Number: (512) 346-6511 ext: 100<br />
      <form class="form-inline my-2 my-lg-0">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ftaCoordModal">Contact Us</button>
      </form>
    </p>
  </div>
</div>
</div>
<?php
  include("includes/footer.php");
?>
