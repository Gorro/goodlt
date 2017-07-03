// Initialize Firebase
var config = {
    apiKey: "AIzaSyAKLWzB_9X14D6aHA-B4SWOLn62e7Se24c",
    authDomain: "goodlifetatto.firebaseapp.com",
    databaseURL: "https://goodlifetatto.firebaseio.com",
    projectId: "goodlifetatto",
    storageBucket: "",
    messagingSenderId: "915159357500"
};
firebase.initializeApp(config);

var app = new Vue({
    el:'#app',
    data: {
        email:'',
        password:''
    },
    created: function () {
        firebase.auth().onAuthStateChanged(function(firebaseUser){
            if(firebaseUser){
                window.location.href = "salesystem.html"
            }
        });
	},	
    methods: {
        ingresar: function (event) {
            event.preventDefault();
            if(this.email == '' || this.password == ''){
                sweetAlert("Oops...", "¡Todos los campos son obligatorios!", "error");
            }else{
                firebase.auth().signInWithEmailAndPassword(this.email,  this.password)
                .then(
                    function(user){
                        console.log(user)
                        firebase.auth().onAuthStateChanged(function(firebaseUser){
                            if(firebaseUser){
                                window.location.href = "salesystem.html"
                            }else{
                                window.location.href = "login.php";
                            }
                        });
                    },
                    function(error) {
                        var errorCode = error.code;
                        var errorMessage = error.message;                
                        sweetAlert("Oops...", errorMessage, "error");
                    });                
            }
        }
    }
});