<?php
  if(!isset($_SESSION)){session_start();}
  include $_SERVER['DOCUMENT_ROOT']."/components/tracking/date_update_system/current_month_and_year_combo.php";
?>

<i class="date-setter-toggle date-setter-toggle-open fa fa-cog"></i>
<form class="date-setter close">
  <i class="date-setter-toggle date-setter-toggle-close fa fa-arrow-left"></i>
  <div class="wrapper">
    <div class="date-setter_input">
      <label for="date-setter_start">Start Month</label>
      <input type="month" name="customiser_start_date" class="date-setter_start-month" value="">
    </div>
    <div class="date-setter_input">
      <label for="date-setter_end">End Month</label>
      <input type="month" name="customiser_end_date" class="date-setter_end-month">
    </div>
    <span class="date-setter_hint error"></span>
  </div>
</form>



<!-- Style -->
<!-- TODO: find the variables for colors -->
<style>
  .date-setter {
    position: fixed;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    max-width: 400px;
    width: 100%;
    box-sizing: border-box;
    display: flex;
    left: 0px;
    min-height: 200px;
    width: 100%;
    padding: 12px;
    border-radius: 0px 4px 4px 0px;
    background: rgba(227, 238, 255, 0.3);
    backdrop-filter: blur(3px);
    overflow: hidden;
    transition: all .2s .05s ease-in-out;
    z-index: 10;
  }

  .date-setter .wrapper {
    display: flex;
    flex-direction: column;
    width: 90%;
  }

  .date-setter.close {
    left: -120%;
    z-index: 0;
  }

  .date-setter:hover {
    background: rgba(227, 238, 255, 0.9);
  }

  /* Toggles */
  .date-setter-toggle {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    display: block;
    width: 60px;
    height: 60px;
    cursor: pointer;
    z-index: 10;

  }

  .date-setter-toggle-open {
    position: fixed;
    left: 0;
    background-color: #e3eeff;
    border-radius: 0px 4px 4px 0px;
    font-size: 32px;
    color: black;
    display: flex;
    align-items: center;
    justify-content: center;
    left: 0px;
    text-align: center;
    transition: all .1s ease-in-out;
  }

  .date-setter-toggle-open.hide {
    left: -70px;
  }

  .date-setter-toggle-close {
    font-size: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    right: 0px;
  }

  .date-setter .date-setter_input {
    width: 90%;
    margin-top: 4px;

  }

  .date-setter_input input {
    cursor: pointer;
  }

  .date-setter .date-setter_input label {
    display: block;
  }

  /* Hint */
  .date-setter_hint {
    font-style: italic;
    opacity: 0.7;
  }

  .date-setter_hint.error {
    color: red;
    min-height: 24px;
  }
</style>

<!-- Script -->
<script>
  const dateEnd = document.querySelector(".date-setter_end-month");
  const dateStart = document.querySelector(".date-setter_start-month");
  let startMonth, startYear, endMonth,endYear;
//  FIXME: needs to load session var right
  // let isDateCustomised =<?php
  // if(!isset($_SESSION)){session_start();}
  // echo($_SESSION['is_date_customised']);

  // ?>;
  getDate();



  // Event Listener
  const dateSetterToggleOpen = document.querySelector(".date-setter-toggle-open");
  const dateSetterToggleClose = document.querySelector(".date-setter-toggle-close");
  const dateSetter = document.querySelector(".date-setter");
  const errorHint = document.querySelector(".date-setter_hint.error");

  // Toggle the date setter
  dateSetterToggleOpen.addEventListener('click',function(e){
    dateSetterToggleOpen.classList.toggle('hide');
    dateSetter.classList.toggle('close');
  });

  dateSetterToggleClose.addEventListener('click',function(e){
    dateSetter.classList.toggle('close');
    dateSetterToggleOpen.classList.toggle('hide');
  })

  // Date onChange event listener
  dateStart.addEventListener('change', changedDate);
  dateEnd.addEventListener('change', changedDate);

  async function changedDate() {
    // Check input date validation
    if (!checkDateRange()) return;

    let data = {
      startMonth: dateStart.value.split('-')[1],
      startYear: dateStart.value.split('-')[0],
      endMonth: dateEnd.value.split('-')[1],
      endYear: dateEnd.value.split('-')[0],
    };
    let xmlhttp = new XMLHttpRequest();

    xmlhttp.open("POST", "/components/navigation/customiser/customiser_date.php", true);
    xmlhttp.send(JSON.stringify(data)); // send request to server
    await location.reload();
  };


  // Functions
  async function getDate() {
    endYear = <?=$endYear?>;
    endMonth = <?=$endMonth?>;
    startMonth = <?=$startMonth?>;
    startYear = <?=$startYear?>;
    
    endMonth = endMonth.toString().padStart(2,'0');
    startMonth = startMonth.toString().padStart(2,'0');
    
    // Set end month to current month
    dateEnd.value = `${endYear}-${endMonth}`;

    // Set default start month as 6 month backwards
    // if (currentMonth >= 6) {
    //   startMonth = (currentMonth - 6).toString().padStart(2, '0');
    //   startYear = currentYear;
    // } else {
    //   startMonth = (currentMonth - 6 + 13).toString().padStart(2, '0');
    //   startYear = currentYear - 1;
    // }

    dateStart.value = `${startYear}-${startMonth}`;
    await setDateRange(endYear,endMonth)
  }

  function setDateRange(endYear,endMonth) {
    let now = new Date();
    let currentMonth = now.getMonth() + 1;
    let currentYear = now.getFullYear();
    let maxYear,maxMonth,minYear,minMonth,maxYearStart;
    maxYear = currentYear + 5;
    minYear = currentYear - 5;
    dateEnd.max =  dateStart.max = `${maxYear}-${currentMonth.toString().padStart(2,'0')}`;
    dateEnd.min = dateStart.min  = `${minYear}-${(currentMonth).toString().padStart(2,'0')}`;
  }

  function checkDateRange() {
    // min date range should be 1 month, and they cannot be the same
    const tempStart = new Date(`${dateStart.value}-01`);
    const tempEnd = new Date(`${dateEnd.value}-01`);

    if (tempEnd <= tempStart) {
      // Hint to show on screen if that is not valid
      errorHint.textContent = 'Please set End Date at least 1 month later than Start Date.';
      return false
    }
    errorHint.textContent = ''
    return true

  }
</script>
