<?php
    $path = "../";
	$page = "Honor Flights of Rochester :: Veteran Information";
	include $path."assets/inc/header.php";
?>
<style>
.control {
  size:30px;
}


</style>

<!-- header -->
<section class="hero has-background-link-dark is-bold">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            Veteran Information
          </h1>
        </div>
      </div>
    </section>

<!-- input fields -->
<div class="group">
  <label class="label">Veteran ID</label>
 
    <input class="input" type="text" placeholder="Enter your Veteran ID">


  <label class="label">Guardian ID</label>
  <div class="control">
    <input class="input" type="text" placeholder="Enter your Guardian ID">
  </div>


</div>

<div class="field">
  <label class="label">Guardian Relation</label>
  <div class="control">
    <input class="input" type="text" placeholder="Enter your Guardian Relation">
  </div>
</div>

<div class="field">
  <label class="label">Team ID</label>
  <div class="control">
    <input class="input" type="text" placeholder="Enter your Team ID">
  </div>
</div>

<div class="field">
  <label class="label">Mission ID</label>
  <div class="control">
    <input class="input" type="text" placeholder="Enter your Mission ID">
  </div>
</div>

<div class="field">
  <label class="label">Bus ID</label>
  <div class="control">
    <input class="input" type="text" placeholder="Enter your Bus ID">
  </div>
</div>

<div class="field">
  <label class="label">First Name</label>
  <div class="control">
    <input class="input" type="text" placeholder="John">
  </div>
</div>

<div class="field">
  <label class="label">Middle Initial</label>
  <div class="control">
    <input class="input" type="text" placeholder="S">
  </div>
</div>

<div class="field">
  <label class="label">Last Name</label>
  <div class="control">
    <input class="input" type="text" placeholder="Doe">
  </div>
</div>

<div class="field">
  <label class="label">Nickname</label>
  <div class="control">
    <input class="input" type="text" placeholder="JDoe">
  </div>
</div>

<div class="field">
  <label class="label">Gender</label>
  <div class="control">
    <div class="select">
      <select>
        <option>Select</option>
        <option>Male</option>
        <option>Female</option>
      </select>
    </div>
  </div>
</div>

<div class="field">
  <label class="label">Address</label>
  <div class="control">
    <input class="input" type="text" placeholder="123 Alien">
  </div>
</div>

<div class="field">
  <label class="label">City</label>
  <div class="control">
    <input class="input" type="text" placeholder="AlienCity">
  </div>
</div>

<div class="field">
  <label class="label">State</label>
  <div class="control">
    <input class="input" type="text" placeholder="AlienWorld">
  </div>
</div>

<div class="field">
  <label class="label">Zip Code</label>
  <div class="control">
    <input class="input" type="text" placeholder="00000">
  </div>
</div>

<div class="field">
  <label class="label">Email</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input is-danger" type="email" placeholder="alien@alienworld.com">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-exclamation-triangle"></i>
    </span>
  </div>
  <!-- p class="help is-danger">This email is invalid</p> -->
</div>

<div class="field">
  <label class="label">Day Phone</label>
  <div class="control">
    <input class="input" type="text" placeholder="(000)-000-0000">
  </div>
</div>

<div class="field">
  <label class="label">Cell Phone</label>
  <div class="control">
    <input class="input" type="text" placeholder="(000)-000-0000">
  </div>
</div>

<div class="field">
  <label class="label">Date of Birth</label>
  <div class="control">
    <input class="input" type="text" placeholder="00/00/0000">
  </div>
</div>

<div class="field">
  <label class="label">Weight</label>
  <div class="control">
    <input class="input" type="text" placeholder="9000">
  </div>
</div>


<div class="field">
  <label class="label">How Heard</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>


<div class="field">
  <label class="label">Shirt Size</label>
  <div class="control">
    <div class="select">
      <select>
        <option>Select</option>
        <option>XS</option>
        <option>S</option>
        <option>M</option>
        <option>L</option>
        <option>XL</option>
        <option>XXL</option>
      </select>
    </div>
  </div>
</div>

<div class="field">
  <label class="label">Alternative Name</label>
  <div class="control">
    <input class="input" type="text" placeholder="Alt name">
  </div>
</div>

<div class="field">
  <label class="label">Alternative Phone</label>
  <div class="control">
    <input class="input" type="text" placeholder="(000)000-0000">
  </div>
</div>

<div class="field">
  <label class="label">Alternative Email</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input is-danger" type="email" placeholder="alien@alienworld.com">
    <span class="icon is-small is-left">
      <i class="fas fa-envelope"></i>
    </span>
    <span class="icon is-small is-right">
      <i class="fas fa-exclamation-triangle"></i>
    </span>
  </div>
  <!-- p class="help is-danger">This email is invalid</p> -->
</div>


<div class="field">
  <label class="label">Alternative Relationship</label>
  <div class="control">
    <input class="input" type="text" placeholder="(000)000-0000">
  </div>
</div>

<div class="field">
  <label class="label">Emergency Name</label>
  <div class="control">
    <input class="input" type="text" placeholder="Enter your Emergency Name">
  </div>
</div>

<div class="field">
  <label class="label">Emergency Relationship</label>
  <div class="control">
    <input class="input" type="text" placeholder="Enter your Emergency Relationship">
  </div>
</div>

<div class="field">
  <label class="label">Emergency Address</label>
  <div class="control">
    <input class="input" type="text" placeholder="Enter your Emergency Address">
  </div>
</div>

<div class="field">
  <label class="label">Emergency Address</label>
  <div class="control">
    <input class="input" type="text" placeholder="Enter your Emergency Address">
  </div>
</div>

<div class="field">
  <label class="label">Emergency Day Phone</label>
  <div class="control">
    <input class="input" type="text" placeholder="(000)000-0000">
  </div>
</div>

<div class="field">
  <label class="label">Emergency Cell Phone</label>
  <div class="control">
    <input class="input" type="text" placeholder="(000)000-0000">
  </div>
</div>

<div class="field">
  <label class="label">Service Branch</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Emergency Cell Phone</label>
  <div class="control">
    <input class="input" type="text" placeholder="(000)000-0000">
  </div>
</div>

<div class="field">
  <label class="label">Service Branch</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Service Rank</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Service Years</label>
  <div class="control">
    <input class="input" type="text" placeholder="1984">
  </div>
</div>

<div class="field">
  <label class="label">Service WW2</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Service Korea</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Service WW2</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Service Korea</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Service Cold War</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Service Vietnam</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Service Activity</label>
  <div class="control">
    <textarea class="input" type="textarea" placeholder=""></textarea>
  </div>
</div>

<div class="field">
  <label class="label">Med Cane</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med Cane</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med Walker</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med Wheelchair</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med Chair Loc</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med Scooter</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med Stairs</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med Stand for 30 Mins</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med HBP</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med Transport Airport</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med Transport Trip</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med Colostomy</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med Cancer</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med Cancer</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med DNR</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med List</label>
  <div class="control">
    <textarea class="input" type="textarea" placeholder=""></textarea>
  </div>
</div>

<div class="field">
  <label class="label">Med Emphysema</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>


<div class="field">
  <label class="label">Med Falls</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med Heart Disease</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med Pacemaker</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med Joint Replacement</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med Kidney</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med Diabetes</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med Seizure</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med Urostomy</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med Dementia</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med Nebulizer</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med Oxygen</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med Stroke</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med Urinary</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med CPAP</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Med Flow Rate</label>
  <div class="control">
    <textarea class="input" type="textarea" placeholder=""></textarea>
  </div>
</div>

<div class="field">
  <label class="label">Med Others</label>
  <div class="control">
    <textarea class="input" type="textarea" placeholder=""></textarea>
  </div>
</div>

<div class="field">
  <label class="label">Med Use Mobility</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Add Other Vets</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Add Vet Names</label>
  <div class="control">
    <textarea class="input" type="textarea" placeholder=""></textarea>
  </div>
</div>

<div class="field">
  <label class="label">Add Specific Guardian</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Guardian Phone</label>
  <div class="control">
    <input class="input" type="text" placeholder="(000)000-0000">
  </div>
</div>

<div class="field">
  <label class="label">Add Comments</label>
  <div class="control">
    <textarea class="input" type="textarea" placeholder=""></textarea>
  </div>
</div>

<div class="field">
  <label class="label">Med Code</label>
  <div class="control">
    <input class="input" type="text" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">App Date</label>
  <div class="control">
    <input class="input" type="date" placeholder="">
  </div>
</div>

<div class="field">
  <label class="label">Diet Restrictions</label>
  <div class="control">
    <textarea class="input" type="textarea" placeholder=""></textarea>
  </div>
</div>


<div class="field">
  <label class="label">Admin Comments</label>
  <div class="control">
    <textarea class="input" type="textarea" placeholder=""></textarea>
  </div>
</div>
<div class="field">
  <label class="label">Last Updated</label>
  <div class="control">
    <input class="input" type="datetime-local" placeholder="">
  </div>
</div>



   <?php include $path."assets/inc/footer.php";?>
  

