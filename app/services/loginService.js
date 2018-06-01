hospitaliza.factory('loginService', function($http) {
    var id_usuario;
	var loggedin = false;
	var pass_user;
    var nomeUsuario;
    var _login = function (login) {           
            
            return request = $http({
                                    method: "post",
                                    url: "http://cleitonlima.com.br/slim/usuario.php/login/",
                                    data: {
                                        email: login.email,
                                        senha: login.senha
                                    }
                                    });
 
        }    

	var _getName = function() {
		return nomeUsuario;
	};

	this.setID = function(userID) {
		id = userID;
	};
    
	var _getPass_user = function() {
		return pass_user;
	};

	var _isUserLoggedIn = function() {
		if(!!localStorage.getItem('login')) {
			loggedin = true;         
			var data = JSON.parse(localStorage.getItem('login'));            
			nomeUsuario = data.nomeUsuario;
			id_usuario = data.id_usuario;
            pass_user = data.pass_user;
		}
        
		return loggedin;
	};

	var _saveData = function(data) {        
		pass_user = data.pass_user;
        nomeUsuario = data.nome;
		id_usuario = data.id;
		loggedin = true;
        
		localStorage.setItem('login', JSON.stringify({
			pass_user: pass_user,
			id_usuario: id_usuario,
            nomeUsuario : nomeUsuario
		}));
            
	};

	var _clearData = function() {
		localStorage.removeItem('login');
		username = "";
		id = "";
		loggedin = false;
	}
    
    return {
        login : _login,
        saveData : _saveData,
        clearData : _clearData,
        isUserLoggedIn : _isUserLoggedIn,
        getName : _getName,
        getPass_user : _getPass_user

    }

});