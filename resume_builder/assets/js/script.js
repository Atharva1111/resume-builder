
var userLoggedIn;

function openPage(url){

    if(url.indexOf("?") == -1){
        url = url + "?";
    }

    var encodedUrl = encodeURI(url + "&userLoggedIn=" + userLoggedIn + "&userLoggedInId=" + userLoggedInId);
    
    $("#mainContent").load(encodedUrl);
    $("body").scrollTop(0);

    history.pushState(null, null, url);
}

function addSkill(resume_id){
    var skill = $("#skillName").val();

    $.post("includes/handlers/ajax/addSkill.php", {skill:skill, resume_id:resume_id})
    .done(function(response) {
        console.log(response);
        openPage("skill.php?");
    });
}

function addAchievement(resume_id){
    var achievementName = $("#achievementName").val();

    $.post("includes/handlers/ajax/addAchievement.php", {achievementName:achievementName, resume_id:resume_id})
    .done(function(response) {
        console.log(response);
        openPage("achievement.php?");
    });
}

function addWebsite(resume_id){
    var websiteName = $("#websiteName").val();
    var websiteURL = $("#websiteURL").val();

    $.post("includes/handlers/ajax/addWebsite.php", {websiteName:websiteName, websiteURL:websiteURL, resume_id:resume_id})
    .done(function(response) {
        console.log(response);
        openPage("website.php?");
    });
}

function addLanguage(resume_id){
    var languageName = $("#languageName").val();

    $.post("includes/handlers/ajax/addLanguage.php", {languageName:languageName, resume_id:resume_id})
    .done(function(response) {
        console.log(response);
        openPage("language.php?");
    });
}

function addEducation(resume_id){
    var educationDegree = $("#educationDegree").val();
    var educationInstitute = $("#educationInstitute").val();
    var educationStartDate = $("#educationStartDate").val();
    var educationEndDate = $("#educationEndDate").val();
    var educationDescription = $("#educationDescription").val();

    $.post("includes/handlers/ajax/addEducation.php", {educationDegree:educationDegree, educationInstitute:educationInstitute, educationStartDate:educationStartDate, educationEndDate:educationEndDate, educationDescription:educationDescription, resume_id:resume_id})
    .done(function(response) {
        console.log(response);
        openPage("education.php?");
    });
}

function addExperience(resume_id){
    var experienceTitle = $("#experienceTitle").val();
    var experienceInstitute = $("#experienceInstitute").val();
    var experienceStartDate = $("#experienceStartDate").val();
    var experienceEndDate = $("#experienceEndDate").val();
    var experienceDescription = $("#experienceDescription").val();
    var experienceCompany = $("#experienceCompany").val();

    $.post("includes/handlers/ajax/addExperience.php", {experienceTitle:experienceTitle, experienceInstitute:experienceInstitute, experienceStartDate:experienceStartDate, experienceEndDate:experienceEndDate, experienceDescription:experienceDescription, experienceCompany:experienceCompany, resume_id:resume_id})
    .done(function(response) {
        console.log(response);
        openPage("experience.php?");
    });
}

function deleteSkill(skillId, resume_id){
    $.post("includes/handlers/ajax/deleteSkill.php", {skillId:skillId, resume_id:resume_id})
    .done(function(response) {
        console.log(response);
        openPage("skill.php?");
    });
}


function deleteAchievement(achievementId, resume_id){
    $.post("includes/handlers/ajax/deleteAchievement.php", {achievementId:achievementId, resume_id:resume_id})
    .done(function(response) {
        console.log(response);
        openPage("achievement.php?");
    });
}

function generatePdf(){
    var doc = new jsPDF();          
    var source = window.document.getElementById('atharva')[0];
    doc.fromHTML(
        source,
        15,
        15,
        {
        'width': 180
        });

    doc.output("dataurlnewwindow");
}

function templatePreview(name, userId){
    window.open(name + ".php?userLoggedInId=" + userId);
}