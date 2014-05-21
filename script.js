function verif(){
	
	if (document.formCo.login.value!='' && document.formCo.pwd.value!='') {
		return true;
	}else{
		alert('merci de remplir tous les champs');
		return false;
	}
	;
}

function verifPseudo() {
	var pseudo = document.formIn.pseudo;
	if(pseudo.value.length < 6 || pseudo.value.length > 25){
		pseudo.style.border = "1px solid red";
		alert('le pseudo doit faire entre 6 et 25 caractères');
		return false;
	}else{
		pseudo.style.border = "1px solid #00E800";
		return true;	
	};
}
function pwdComplex(){
	var mdp = document.formIn.mdp;
	var min= 6;
	var max = 16;
	var regex =  "(?=(.*[A-Z]){2,})"              + //contient une majuscule
               "(?=(.*[a-z]){2,})"   + //contient au moins deux minuscule
               "(?=(.*[0-9]){2,})" ;  + //contient au moins deux chiffres
               
	if(mdp.length<min || mdp.length>16){
		alert('le mot de passe doit contenir entre 6 et 16 caractères');
		return false;
	}else if (!regex.test(mdp)){
		alert('le mot de passe doit contenir des lettres ET des chiffres');
		return false;
	}
	else{
		return true;
	};
}

function verifmdp(){
	var mdp = document.formIn.mdp;
	var mdp2 = document.formIn.mdp2;
	if(mdp.value != mdp2.value){
		mdp.style.border = "1px solid red";
		mdp2.style.border = "1px solid red";
		alert('les 2 mots de passe sont différents');
		
		return false;
	}else{
		mdp.style.border = "1px solid #00E800";
		mdp2.style.border = "1px solid #00E800";
		return true;
	}	
}

function grosseVerif(){
	var pseudo = document.formIn.pseudo;
	var mdp = document.formIn.mdp;
	var mdp2 = document.formIn.mdp2;
	var mail = document.formIn.mail;
	var age = document.formIn.age;
	var sexe = document.formIn.sexe;
	var ville = document.formIn.ville;
	var pays = document.formIn.pays;
	var codepostal = document.formIn.codepostal;


	if(pseudo.value =='' || mdp.value =='' || mdp2.value =='' || mail.value =='' || age.value ==''
		|| sexe.value =='' || ville.value =='' || codepostal.value =='' || pays.value =='' ){
		alert('merci de remplir tous les champs');
		return false;
	}else{
		return true;
	}
}