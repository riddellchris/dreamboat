<?php
if (!isset($_SESSION)) {
  session_start();
}
// require $_SERVER['DOCUMENT_ROOT']."/components/navigation/customiser/customiser_date.php";
?>

<div class="date-setter-container">
  <i class="date-setter-toggle date-setter-toggle-open"></i>
  <form class="date-setter close">
    <span class="date-setter-toggle date-setter-toggle-close"></span>
    <div class="wrapper">
      <span class="date-setter_hint">Default start date is 6 month backward from today</span>
      <div class="date-setter_input">
        <label for="date-setter_start">Start Month</label>
        <input type="month" name="customiser_start_date" class="date-setter_start-month">
      </div>
      <div class="date-setter_input">
        <label for="date-setter_end">End Month</label>
        <input type="month" name="customiser_end_date" class="date-setter_end-month" value="<?$_SESSION ['customiser_end_date']?>">
      </div>
      <span class="date-setter_hint error"></span>
    </div>
  </form>
</div>



<!-- Style -->
<!-- TODO: find the variables for colors -->
<style>
  .date-setter-container{ 
    position: fixed;
    top:50%;
    left:0;
    transform: translateY(-50%);
    z-index: 10;
    max-width: 400px;
    width:100%;
  }

  .date-setter{
    box-sizing: border-box;
    position: relative;
    display: flex;
    left:0px;
    min-height:200px;
    width:100%;
    padding:12px;
    border-radius: 0px 4px 4px 0px;
    background: rgba(227, 238, 255, 0.3);
    backdrop-filter: blur(3px);
    overflow: hidden;
    transition: all .2s .05s ease-in-out;
  }
  .date-setter .wrapper{
    display: flex;
    flex-direction: column;
    width:90%;
  }
    .date-setter.close{
    left:-120%;
  }

  .date-setter:hover{
    background: rgba(227, 238, 255, 0.9);
  }
  
  /* Toggles */
  .date-setter-toggle{
    display: block;
    position:absolute;
    top:50%;
    transform: translateY(-50%);
    width: 60px;
    height:60px;
    cursor: pointer;
    z-index:10;
    
  }

  .date-setter-toggle-open{
    /* FIXME: the url is redirectd, so the image won't be loaded. Currently add an asset folder in results/productivity */
    background-image: url('./assets/setting-icon.png');
    background-size: 40%;
    background-repeat: no-repeat;
    background-position: 50% 50%;
    background-color: #e3eeff;
    border-radius: 0px 4px 4px 0px;
    left:0px;
    text-align: center;
    transition: all .1s ease-in-out;
  }
  .date-setter-toggle-open.hide{
    left:-70px;
  }
  .date-setter-toggle-close{
    background-image: url('./assets/arrow-left-short.svg');
    background-size: 50%;
    background-repeat: no-repeat;
    background-position: 50% 50%;
    right:0px;
  }

  .date-setter .date-setter_input{
    width:90%;
    margin-top: 4px;
    
  }
  .date-setter_input input{
    cursor: pointer;
  }
  .date-setter .date-setter_input label{
    display: block;
  }

    /* Hint */
  .date-setter_hint{
  font-style: italic;
  opacity: 0.7;
  }

  .date-setter_hint.error{
    color:red;
    min-height: 24px;
  }

</style>

<!-- Script -->
<script>
const dateEnd = document.querySelector(".date-setter_end-month");
const dateStart = document.querySelector(".date-setter_start-month");
let now = new Date();
let currentMonth = now.getMonth() +1;
let currentYear = now.getFullYear();
let endMonth = currentMonth.toString().padStart(2,'0');
let endYear = currentYear;

  // Set end month to current month
  dateEnd.value = `${endYear}-${endMonth}`;
  
  // Set default start month as 6 month backwards
  let startMonth, startYear;
  if(currentMonth>=6){
    startMonth = (currentMonth - 6).toString().padStart(2,'0');
    startYear = currentYear;
  }else{
    startMonth = (currentMonth - 6 + 13).toString().padStart(2,'0');
    startYear = currentYear - 1;
  }
  
  dateStart.value = `${startYear}-${startMonth}`;
  setDateRange(); // Set date range to 6 month default when open it (every time)



// Event Listener
const dateSetterContainer = document.querySelector(".date-setter-container");
const dateSetterToggleOpen = document.querySelector(".date-setter-toggle-open");
const dateSetterToggleClose = document.querySelector(".date-setter-toggle-close");
const dateSetter = document.querySelector(".date-setter");
const errorHint = document.querySelector(".date-setter_hint.error");

// Toggle the date setter
dateSetterContainer.addEventListener('click',function(e){
  if(e.target.classList.contains("date-setter-toggle")){
    dateSetter.classList.toggle("close");
    dateSetterToggleOpen.classList.toggle('hide');
  }
});

// Check if the date is valid
dateStart.addEventListener('change',checkDateRange);
dateEnd.addEventListener('change',checkDateRange);

function changedDate(val){
  if(val == "") return;
  let xmlhttp = new XMLHttpRequest();
  if(xmlhttp.onreadyState == 4 && this.status ==200) {
    console.log('ready')
  }
    xmlhttp.open("POST", "customiser_date.php?q=" + val, true);
    xmlhttp.send();
};


// Functions
  
  function setDateRange(){
    let maxDate = `${endYear + 5}-${currentMonth}`;
    let minDate = `${endYear - 5}-${currentMonth}`;
    dateEnd.max = maxDate;
    dateEnd.min = `${endYear - 5}-${currentMonth + 1}`;
    dateStart.max = `${endYear + 5}-${currentMonth - 1}`
    dateStart.min = minDate;
  }
  
  function checkDateRange(){
    // min date range should be 1 month, and they cannot be the same
    const tempStart = new Date(`${dateStart.value}-01`);
    const tempEnd = new Date(`${dateEnd.value}-01`);
    
    let errorMessage = '';
    if(tempEnd <= tempStart){
      console.error('error' ,errorHint);
      // Hint to show on screen if that is not valid
      errorMessage = 'Please set End Date at least 1 month later than Start Date.';
    }else{
      errorMessage = ''
    }
    errorHint.textContent = errorMessage;
  }
</script>