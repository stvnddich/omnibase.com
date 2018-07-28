<!-- Modal -->
<div class="modal fade" id="ftaCoordModal" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="card card-outline-secondary">
      <div class="modal-header">
        <h3 class="modal-title">Contact Us</h3>
      </div>
      <div class="card-block">
<?php
  if (isset ($_POST['submit'])) {
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'Contact Form';
    $to = 'techsupport@omnibase.com';
    $subject = '';
    $name = $firstName ' . ' $lastName;
    $body = '<html><head><style>table, th, td {border: 1px solid black;}</style></head><body>';
    $body .= '<table>';
    $body .= '<tr><td>Name: </td> <td>' . $name . '</td></tr>';
    $body .= '<tr><td>Email: </td> <td>' . $email . '</td></tr>';
    $body .= '<tr><td>Message: </td> <td>' . $message . '</td></tr>';
    $body .= '</table>';
    $body .= '</body></html>';

    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset-8859-1\r\n";
    $headers .= "From: $email\r\n";
    $headers .= "X-Priority: 1\r\n";
    $headers .= "X-MSMail-Priority: High\r\n";

    mail($to, $subject, $body, $headers);
 ?>

<?php  } else { ?>
   <div class="modal-body">
   <form class="form" role="form" method="post" action="training.php">
       <label for="firstName" class="mb-0">First Name</label>
       <div class="row mb-1">
         <div class="col-lg-12">
           <input type="text" name="firstName" class="form-control" required="">
         </div>
       </div>
       <label for="lastName" class="mb-0">Last Name</label>
       <div class="row mb-1">
         <div class="col-lg-12">
           <input type="text" name="lastName" class="form-control" required="">
         </div>
       </div>
       <label for="email" class="mb-0">Email</label>
       <div class="row mb-1">
         <div class="col-lg-12">
           <input type="text" name="email" class="form-control" required="">
         </div>
       </div>
       <label for="message" class="mb-0">Message</label>
       <div class="row mb-1">
         <div class="col-lg-12">
           <textarea rows="6" name="message" class="form-control" required=""></textarea>
         </div>
       </div>
       <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
       <button name="submit" type="submit" class="btn btn-primary">Send Message</button>
     </div>
     </form>
   </div>
   <?php } ?>
 </div>
</div>
</div>
</div>
</div> <!--end modal -->
