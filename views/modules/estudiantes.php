<html>

<head>

    <meta charset="UTF-8">
    <title>Basic CRUD Application - jQuery EasyUI CRUD Demo</title>
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.11\themes\default/easyui.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.11/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.11/themes/color.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.9.11/demo/demo.css">
    <script type="text/javascript" src="jquery-easyui-1.9.11/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-easyui-1.9.11/jquery.easyui.min.js"></script>
</head>
<body>
    <h2>Formulario Ingreso Estudiantes</h2>
    
    
    <table id="dg" title="Estudiantes" class="easyui-datagrid" style="width:700px;height:250px"
    url="models/cargar.php"
            toolbar="#toolbar" pagination="true"
            rownumbers="true" fitColumns="true" singleSelect="true">
        <thead>
            <tr>
                <th field="CED_EST" width="50">Cédula</th>
                <th field="ID_CURSO_PER" width="50">Nombre</th>
                <th field="NOM_EST" width="50">Apellido</th>
                <th field="APE_EST" width="50">Dirección</th>
                <th field="DIR_EST" width="50">Teléfono</th>
                <th field="SEXO_EST" width="50">Sexo</th>
                <th field="ECIVIL_EST" width="50">ECivil</th>
            </tr>
        </thead>
    </table>
    <div id="toolbar">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">Nuevo Estudiante</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Editar Estudiante</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Eliminar Estudiante</a>
    </div>
    
    <div id="dlg" class="easyui-dialog" style="width:400px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
        <form id="fm" method="post" novalidate style="margin:0;padding:20px 50px" action="http://localhost/WebCV/models/acceso.php">
        <input type="hidden" id="op" name="op" value="insertarAlumno">
            <h3>Datos Estudiante</h3>
            <div style="margin-bottom:10px">
                <input name="CED_EST" class="easyui-textbox" required="true" label="Cédula:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="ID_CUR_PER" class="easyui-textbox" required="true" label="Curso:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="NOM_EST" class="easyui-textbox" required="true" label="Nombre:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="APE_EST" class="easyui-textbox" required="true" label="Apellido:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="DIR_EST" class="easyui-textbox" required="true" label="Direccion:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
            <input id="SEXO_EST" class="easyui-combobox" name="SEXO_EST" style="width:100%;" data-options="
                    valueField: 'id',
                    textField: 'sexo',
                    label: 'SEXO:',
                    labelPosition: 'top'
                    ">
            </div>
            <div style="margin-bottom:10px">
            <input id="ECIVIL_EST" class="easyui-combobox" name="ECIVIL_EST" style="width:100%;" data-options="
                    valueField: 'id',
                    textField: 'estado civil',
                    label: 'Estado Civil:',
                    labelPosition: 'top'
                    ">
            </div>
        </form>
    </div>

    <div id="dlg1" class="easyui-dialog" style="width:400px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons1'">
        <form id="fm1" method="post" novalidate style="margin:0;padding:20px 50px" action="http://localhost/WebCV/models/acceso.php">
        <input type="hidden" id="op" name="op" value="editarAlumno">
            <h3>Datos Estudiante</h3>
            <div style="margin-bottom:10px">
                <input name="CED_EST" class="easyui-textbox" required="true" label="Cédula:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="ID_CUR_PER" class="easyui-textbox" required="true" label="Curso:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="NOM_EST" class="easyui-textbox" required="true" label="Nombre:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="APE_EST" class="easyui-textbox" required="true" label="Apellido:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="DIR_EST" class="easyui-textbox" required="true" label="Direccion:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
            <input id="SEXO_EST" class="easyui-combobox" name="SEXO_EST" style="width:100%;" data-options="
                    valueField: 'id',
                    textField: 'sexo',
                    label: 'SEXO:',
                    labelPosition: 'top'
                    ">
            </div>
            <div style="margin-bottom:10px">
            <input id="ECIVIL_EST" class="easyui-combobox" name="ECIVIL_EST" style="width:100%;" data-options="
                    valueField: 'id',
                    textField: 'estado civil',
                    label: 'Estado Civil:',
                    labelPosition: 'top'
                    ">
            </div>
        </form>
    </div>


    
    <div id="dlg-buttons">
        <a href="#" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="submitForm()" style="width:90px">Guardar</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
    </div>


    <div id="dlg-buttons1">
        <a href="#" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="submitForm1()" style="width:90px">Guardar</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg1').dialog('close')" style="width:90px">Cancel</a>
    </div>



    
    <script type="text/javascript">
        var url;
        function newUser(){
            $('#dlg').dialog('open').dialog('center').dialog('setTitle','New User');
            $('#fm').form('load');
            url = 'save_user.php';
        }

        function editUser(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $('#dlg1').dialog('open').dialog('center').dialog('setTitle','Edit User');
                $('#fm1').form('load',row);
                url = 'update_user.php?id='+row.id;
            }
        }
        function saveUser(){
            $('#fm').form('submit',{
                url: url,
                onSubmit: function(){
                    return $(this).form('validate');
                },
                success: function(result){
                    var result = eval('('+result+')');
                    if (result.errorMsg){
                        $.messager.show({
                            title: 'Error',
                            msg: result.errorMsg
                        });
                    } else {
                        $('#dlg').dialog('close');        // close the dialog
                        $('#dg').datagrid('reload');    // reload the user data
                    }
                }
            });
        }
        function submitForm(){
            $('#fm').form("submit");
            $('#fm').form({
                success:function(data){
                    console.log(data);
                    if(data.indexOf("ERROR")!==-1){
                        $.messager.alert("ERROR",data,"ERROR");
                    }else{
                        $.messager.alert(data);
                    }
                }
            });
        }

        function submitForm1(){
            $('#fm1').form("submit");
            $('#fm1').form({
                success:function(data){
                    console.log(data);
                    if(data.indexOf("ERROR")!==-1){
                        $.messager.alert("ERROR",data,"ERROR");
                    }else{
                        $.messager.alert(data);
                    }
                }
            });
        }

        function destroyUser(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $.messager.confirm('Confirm','Are you sure you want to destroy this user?',function(r){
                    if (r){
                        $.post('destroy_user.php',{id:row.id},function(result){
                            if (result.success){
                                $('#dg').datagrid('reload');    // reload the user data
                            } else {
                                $.messager.show({    // show error message
                                    title: 'Error',
                                    msg: result.errorMsg
                                });
                            }
                        },'json');
                    }
                });
            }
        }        
    </script>
    <script>
    $(document).ready(function(){
        $("#SEXO_EST").combobox("reload","sexo.json");
    });
    </script>
    <script>
    $(document).ready(function(){
        $("#ECIVIL_EST").combobox("reload","ecivil.json");
    });
    </script>
</body>
</html>