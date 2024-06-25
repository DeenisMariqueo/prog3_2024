function askDeleteStudent(id){
    alertify.confirm("eliminar datos", "¿esta seguro que desea eliminar este regisro?",
    DeleteStudent(id),
    function(){ alertify.error('Error');}); 

}

function deleteStudent(id){
    $.ajax({
        type:"POST",
        url:"student.controller.php",
        data: "operacion=delete&id="+id,
        success:function(result){
            if(result==1){
                alertify.success("El proceso se ejecuto correctamente"); 
            }else{
                alertify.error("El proceso no pudo realizarse");
            }

        }
    });
}

//agregar ID CONTROLLER





