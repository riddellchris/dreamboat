<style>
#unpositioned_nodes_container{
    color: #4332ff;
    position: fixed;
    bottom: <?php echo $start_from_bottom; ?>;
 //   left: 6;
 padding-left: 6px;
 padding-right: 6px;
   z-index: 2000;
       font-weight: 600; 
     background: #ebf7ff; 
//    border: solid 4px #737373;
 //   padding: 6px;
    box-shadow: 4px 0px 8px 4px rgb(0 0 0 / 13%);   
           font-family: helvetica;
           font-size: 18px;

           overflow-y: auto;
       max-height: calc(100vh - 625px)
}

#body:fullscreen 		#unpositioned_nodes_container       {  		bottom:  15;}
#unpositioned_nodes_container input{
  //  font-family: Barlow Semi Condensed;
  //  font-weight: 600;
  //  color: #cecece;
    font-size: 18px;
    width: 60px;
       padding: 3px; 


}   
   form{
       margin-block-end: 0px;

   }

.position_submit{
    background-color: 

}
#unpositioned_nodes_container table{
    color: #4332ff;
}
#unpositioned_nodes_container .position_submit{
    background-color: #4332ff;
    color: #ffffff;
     box-shadow: 4px 0px 8px 4px rgb(0 0 0 / 13%);
}
#unpositioned_nodes_container .position_submit:hover{
    background-color: white;
    color: #4332ff;
     box-shadow: none;
}
#unpositioned_nodes_container .position_submit.red{
    background-color: red;
    color: #ffffff;
     box-shadow: 4px 0px 8px 4px rgb(0 0 0 / 13%);
}
#unpositioned_nodes_container .position_submit.red:hover{
    background-color: white;
    color: red;
     box-shadow: none;
}

.x_and_y{
   -moz-box-shadow:    inset 0 0 10px rgb(0 0 0 / 13%);
   -webkit-box-shadow: inset 0 0 10px rgb(0 0 0 / 13%);
   box-shadow:         inset 0 0 10px rgb(0 0 0 / 13%);
}
</style>