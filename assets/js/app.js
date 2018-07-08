(function)() {
	<script>
  	// Initialize Firebase
  	const config = {
    	apiKey: "AIzaSyCW-PgIpCK1GX_3TyFJyrYDnUTPBYj9X_M",
    	authDomain: "odd-jobs-eb72a.firebaseapp.com",
    	databaseURL: "https://odd-jobs-eb72a.firebaseio.com",
    	projectId: "odd-jobs-eb72a",
    	storageBucket: "odd-jobs-eb72a.appspot.com",
    	messagingSenderId: "836400374523"
  	};
  	firebase.initializeApp(config);

  	const txtUser = document.getElementByID("txtUser");
  	const txtPass = document.getElementByID("txtPass");
  	const btnLogin = document.getElementByID("btnLogin");

  	//Add Login Event
  	btnLogin.addEventListner('click', e => {
  		//Get Email and Password
  		const email = txtUser.value;
  		const pass = txtPass.value;
  		const auth = firebase.auth();

  		//Sign In
  		auth.signInWithEmailAndPassword(email, pass);
  	});
  	//Add a RealTime Listner
  	firebase.auth().onAuthStateChanged(firebaseUser => {
  		if(firebaseUser) {
  			console.log(firebaseUser);
  		}
  		else {
  			console.log('not logged in');
  		}

  	})
  }();
  		}

