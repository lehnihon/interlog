( function( $ ) {
	// logar sistema
	$(document).ready(function() 
	{
				
	    $("#btn_entrar").click(function() 
	    {
	        
	        
	            var action = $("#form1").attr('action');
	            var form_data = {
	                    username: $("#username").val(),
	                    password: $("#password").val(),
	                            is_ajax: 1
	            };
	            
	            $.ajax
	            ({
	                type: "POST",
	                url: action,
	                data: form_data,
	                success: function(response)
	                { 

	//                    
	//                    location.href='../logist/index.php';
	                    
	                    if(response == '0' || response == '1')//codtipousuario 0 ou 1
	                    {
	                        location.href='../logist/index.php';
	                    }
	                    else if(response == 'primeira')
	                    {
	                        location.href='../logist/altera_senha_expirada.php?status=primeiro_acesso';
	                    }
	                    else if(response == 'expira')
	                    {
	                        location.href='../logist/altera_senha_expirada.php?status=expirado';
	                    }
	                    
	                    
	                    
	                    else if(response == '2')//codtipousuario 2
	                    {
	                        location.href='../siclo/index.php';
	                    }
	                    else if(response == 'primeira_2')
	                    {
	                        location.href='../siclo/alteraSenha.php?status=primeiro_acesso';
	                    }
	                    else if(response == 'expira_2')
	                    {
	                        location.href='../siclo/alteraSenha.php?status=expirado';
	                    }
	                    
	                    
	                    
	                    if(response == '3')//codtipousuario 2 uniex
	                    {
	                        location.href='../logist/index.php';
	                    }
	                    else if(response == 'primeira_3')
	                    {
	                        location.href='../logist/altera_senha_expirada.php?status=primeiro_acesso';
	                    }
	                    else if(response == 'expira_3')
	                    {
	                        location.href='../logist/altera_senha_expirada.php?status=expirado';
	                    }
	                    
	                    
	                    if(response == '4')//novo modulo cliente
	                    {
	                        location.href='../modulocliente/index.php';
	                    }
	                    else if(response == 'primeira_4')
	                    {
	                        location.href='../modulocliente/primeira.php?c=alterar';
	                    }
	                    else if(response == 'expira_4')
	                    {
	                        location.href='../modulocliente/primeira.php?c=alterar';
	                    }
	                    
	                    
	                    else if(response == '5')
	                    {
	                        location.href='../boxticketsc/index.php';
	                    }
	                    
	                    else if(response == 'primeira_5')
	                    {
	                        location.href='../boxticketsc/altera_senha_expirada.php?mot=primAcesso';
	                    }
	                    else if(response == 'expira_5')
	                    {
	                        location.href='../boxticketsc/altera_senha_expirada.php?mot=expirada';
	                    }
	                    
	                    
	                    
	                    else if(response == '6')
	                    {
	                        location.href='../boxticketsp/index.php';
	                    }
	                    else if(response == 'primeira_6')
	                    {
	                        location.href='../boxticketsp/altera_senha_expirada.php?mot=primAcesso';
	                    }
	                    else if(response == 'expira_6')
	                    {
	                        location.href='../boxticketsp/altera_senha_expirada.php?mot=expirada';
	                    }
	                    
	                    if(response == '7')//novo modulo cliente
	                    {
	                        location.href='../moduloclientesodexho/index.php';
	                    }
	                    else if(response == 'primeira_7')
	                    {
	                        location.href='../moduloclientesodexho/senha.php?c=alterar';
	                    }
	                    else if(response == 'expira_7')
	                    {
	                        location.href='../moduloclientesodexho/senha.php?c=alterar';
	                    }
	                    
	                    else if(response == '10')
	                    {
	                        $("#msg_erro").html("<div id=\"erro\"><div id=\"icon\"></div><div id=\"texto\">Já existe um usuário logado!</div></div>");
	                    }
	                    
	                    else if(response == 'erro_ativo')
	                    {
	                        $("#msg_erro").html("<div id=\"erro\"><div id=\"icon\"></div><div id=\"texto\">Usuário não esta ativo!</div></div>");
	                    }
	                    
	                    else if(response == 'erro_bloqueado')
	                    {
	                        $("#msg_erro").html("<div id=\"erro\"><div id=\"icon\"></div><div id=\"texto\">Usuário bloqueado!</div></div>");
	                    }
	                      
	                    
	                    else if(response == 'erro')
	                    {
	                        $("#msg_erro").html("<div id=\"erro\"><div id=\"icon\"></div><div id=\"texto\">Usuário ou senha Invalidos!</div></div>");
	                    }
	                    
	                    else if(response == 'manu')
	                    {
	                        $("#msg_erro").html("<div id=\"erro\"><div id=\"icon\"></div><div id=\"texto\">Sistema em manutenção!</div></div>");
	                    }
	                    
	                    if(response == "manu"){
	                        $("#msg_erro").html("<div id=\"erro\"><div id=\"iconErro\"></div><div id=\"texto\">Sistema em manutenção!</div></div>");
	                    }
	                    

	                    
	                    
	                }
	            });	
	    return false;
	    });
				
	});

} )( jQuery );