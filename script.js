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


function pwdComplex()
{
	var mdp = document.formIn.mdp;
	var myRegex = new RegExp("^(?=.*[a-z]+)(?=.*[A-Z]+)(?=.*[0-9]+)([^\\s]{6,})$", "g");
	if(mdp.value.match(myRegex)){
		return true;
	} else {
		alert('le mot de passe doit contenir des lettres minuscules et majuscules ainsi que des chiffres');
		return false;	
	}
}

function code()
{
	var code = document.formIn.codepostal;
	var myRegex = new RegExp("^(?=.*[0-9]+)([^\\s]{5,})$", "g");
	if(code.value.match(myRegex)){
		return true;
	} else {
		alert('vous devez entrer un code postal à 5 chiffres');
		return false;	
	}
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
function caroussel(){
	$(document).ready(function(){
        $("#caroussel").each(function(){
            var t = setInterval(function(){
                $("#caroussel ul").animate({marginLeft:-1400},2000,function(){
                    $("#caroussel ul li:last").after($("#caroussel ul li:first"));
                    $(this).css({marginLeft:0});
                })
            },5000);
        });
   });
}
