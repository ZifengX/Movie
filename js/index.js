// JavaScript Document
/*Validate Input*/
function validateForm() {
   var x = document.getElementById("feedback").value;
   
  if (x==null || x==""){		
		document.getElementById("feedbacklabel").innerHTML = "请输入反馈信息:";
        return false;
	}

}