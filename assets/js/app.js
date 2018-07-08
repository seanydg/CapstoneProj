(function() {
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

    //Get Elements
  	const txtEmail = document.getElementByID("txtEmail");
  	const txtPass = document.getElementByID("txtPass");
  	const btnLogin = document.getElementByID("btnLogin");
    const btnSignUp = document.getElementByID("btnSignUp");

  	//Add Login Event
  	btnLogin.addEventListner('click', e => {
  		//Get Email and Password
  		const email = txtEmail.value;
  		const password = txtPass.value;
  		const auth = firebase.auth();

  		//Sign In
  		firebase.auth().signInWithEmailAndPassword(email, password);
  	});

    //Add Sign Up Event
    btnSignUp.addEventListener('click', e => {
      const email = txtEmail.value;
      const password = txtPass.value;
      const auth = firebase.auth();

      //Sign Up
      const promise = firebase.auth().createUserWithEmailAndPassword(email, password);
      promise.catch(e => console.log(e.message));
    });


    
  });


