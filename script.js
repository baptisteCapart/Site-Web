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
	if(document.formIn.pseudo.value.length < 2 || document.formIn.pseudo.value.length > 25){
		alert('le pseudo doit faire entre 2 et 25 caractères');
		return false;
	}else{
		return true;	
	};
}

function verifmdp(){
	var mdp = document.formIn.mdp;
	var mdp2 = document.formIn.mdp2;
	if(mdp.value != mdp2.value){
		alert('les 2 mots de passe sont différents');
		return false;
	}else{
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