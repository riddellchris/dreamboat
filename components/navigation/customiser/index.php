<div class="date-setter-container">
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
</div>


<!-- Style -->
<!-- TODO: find the variables for colors -->
<style>
  .date-setter-container {
    position: fixed;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    z-index: 10;
    max-width: 400px;
    width: 100%;
  }

  .date-setter {
    box-sizing: border-box;
    position: relative;
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
  }

  .date-setter .wrapper {
    display: flex;
    flex-direction: column;
    width: 90%;
  }

  .date-setter.close {
    left: -120%;
  }

  .date-setter:hover {
    background: rgba(227, 238, 255, 0.9);
  }

  /* Toggles */
  .date-setter-toggle {
    display: block;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 60px;
    height: 60px;
    cursor: pointer;
    z-index: 10;

  }

  .date-setter-toggle-open {
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
  let now = new Date();
  let currentMonth = now.getMonth() + 1;
  let currentYear = now.getFullYear();
  let endMonth = currentMonth.toString().padStart(2, '0');
  let endYear = currentYear;

  getDate()
  setDateRange(); // Set date range to 6 month default when open it (every time)



  // Event Listener
  const dateSetterContainer = document.querySelector(".date-setter-container");
  const dateSetterToggleOpen = document.querySelector(".date-setter-toggle-open");
  const dateSetterToggleClose = document.querySelector(".date-setter-toggle-close");
  const dateSetter = document.querySelector(".date-setter");
  const errorHint = document.querySelector(".date-setter_hint.error");

  // Toggle the date setter
  dateSetterContainer.addEventListener('click', function(e) {
    if (e.target.classList.contains("date-setter-toggle")) {
      dateSetter.classList.toggle("close");
      dateSetterToggleOpen.classList.toggle('hide');
    }
  });

  // Date onChange event listener
  dateStart.addEventListener('change', changedDate);
  dateEnd.addEventListener('change', changedDate);

  function changedDate() {
    // Check input date validation
    let dateInputValidation = checkDateRange();
    if (!dateInputValidation) return;

    let data = {
      startMonth: dateStart.value.split('-')[1],
      startYear: dateStart.value.split('-')[0],
      endMonth: dateEnd.value.split('-')[1],
      endYear: dateEnd.value.split('-')[0],
    };
    let xmlhttp = new XMLHttpRequest();

    xmlhttp.open("POST", "/components/navigation/customiser/customiser_date.php", true);
    xmlhttp.send(JSON.stringify(data)); // send request to server

  };


  // Functions
  function getDate() {
    // Set end month to current month
    dateEnd.value = `${endYear}-${endMonth}`;

    // Set default start month as 6 month backwards
    let startMonth, startYear;
    if (currentMonth >= 6) {
      startMonth = (currentMonth - 6).toString().padStart(2, '0');
      startYear = currentYear;
    } else {
      startMonth = (currentMonth - 6 + 13).toString().padStart(2, '0');
      startYear = currentYear - 1;
    }

    dateStart.value = `${startYear}-${startMonth}`;
  }

  function setDateRange() {
    let maxDate = `${endYear + 5}-${currentMonth}`;
    let minDate = `${endYear - 5}-${currentMonth}`;
    dateEnd.max = maxDate;
    dateEnd.min = `${endYear - 5}-${currentMonth + 1}`;
    dateStart.max = `${endYear + 5}-${currentMonth - 1}`
    dateStart.min = minDate;
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

<?php
    $_SESSION['is_date_customised'] = true;
?>