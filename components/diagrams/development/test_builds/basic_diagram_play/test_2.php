<style>
.top_left {
     background: 
         linear-gradient(to top left,
             rgba(0,0,0,0) 0%,
             rgba(0,0,0,0) calc(50% - 0.8px),
             rgba(0,0,0,1) 50%,
             rgba(0,0,0,0) calc(50% + 0.8px),
             rgba(0,0,0,0) 100%);
       }


.top_right{  

     background:         
         linear-gradient(to top right,
             rgba(0,0,0,0) 0%,
             rgba(0,0,0,0) calc(50% - 0.8px),
             rgba(0,0,0,1) 50%,
             rgba(0,0,0,0) calc(50% + 0.8px),
             rgba(0,0,0,0) 100%);
}


.bottom_left{
     clear:left;
     background: 
         linear-gradient(to bottom left,
             rgba(0,0,0,0) 0%,
             rgba(0,0,0,0) calc(50% - 0.8px),
             rgba(0,0,0,1) 50%,
             rgba(0,0,0,0) calc(50% + 0.8px),
             rgba(0,0,0,0) 100%);
	}
.bottom_right{
     background: 
         linear-gradient(to bottom right,
             rgba(0,0,0,0) 0%,
             rgba(0,0,0,0) calc(50% - 0.8px),
             rgba(0,0,0,1) 50%,
             rgba(0,0,0,0) calc(50% + 0.8px),
             rgba(0,0,0,0) 100%);
	}

.test{ 	float:left;   height: 10vh;	width: 10vw;
  position: relative;


  background-color: white;
  }
#icon {
  background-color: green;
  color: white;
 
  width: 20px;
  height: 20px;
  position: absolute;
  margin-right: -20px;
  right: 0;
  top: -0;
}
</style>


<div class="test top_left">
  <span id="icon">
    |&gt;
  </span>
</div>
<div class="test top_right"></div><br>
<div class="test bottom_left"></div>
<div class="test bottom_right"></div>

