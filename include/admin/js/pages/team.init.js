var buttonGroups,list=document.querySelectorAll(".team-list");function onButtonGroupClick(e){"list-view-button"===e.target.id||"list-view-button"===e.target.parentElement.id?(document.getElementById("list-view-button").classList.add("active"),document.getElementById("grid-view-button").classList.remove("active"),Array.from(list).forEach(function(e){e.classList.add("list-view-filter"),e.classList.remove("grid-view-filter")})):(document.getElementById("grid-view-button").classList.add("active"),document.getElementById("list-view-button").classList.remove("active"),Array.from(list).forEach(function(e){e.classList.remove("list-view-filter"),e.classList.add("grid-view-filter")}))}list&&(buttonGroups=document.querySelectorAll(".filter-button"))&&Array.from(buttonGroups).forEach(function(e){e.addEventListener("click",onButtonGroupClick)});var url="assets/json/",allmemberlist="";function loadTeamData(e){document.querySelector("#team-member-list").innerHTML="",Array.from(e).forEach(function(e,t){var r=e.bookmark?"active":"",m=e.memberImg?'<img src="'+e.memberImg+'" alt="" class="member-img img-fluid d-block rounded-circle" />':'<div class="avatar-title border bg-light text-primary rounded-circle text-uppercase">'+e.nickname+"</div>";document.querySelector("#team-member-list").innerHTML+='<div class="col">            <div class="card team-box">                <div class="team-cover">                    <img src="'+e.coverImg+'" alt="" class="img-fluid" />                </div>                <div class="card-body p-4">                    <div class="row align-items-center team-row">                        <div class="col team-settings">                            <div class="row">                                <div class="col">                                    <div class="flex-shrink-0 me-2">                                        <button type="button" class="btn btn-light btn-icon rounded-circle btn-sm favourite-btn '+r+'">                                            <i class="ri-star-fill fs-14"></i>                                        </button>                                    </div>                                </div>                                <div class="col text-end dropdown">                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">                                        <i class="ri-more-fill fs-17"></i>                                    </a>                                    <ul class="dropdown-menu dropdown-menu-end">                                        <li><a class="dropdown-item edit-list" href="#addmemberModal"  data-bs-toggle="modal" data-edit-id="'+e.id+'"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>                                        <li><a class="dropdown-item remove-list" href="#removeMemberModal" data-bs-toggle="modal" data-remove-id="'+e.id+'"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>                                    </ul>                                </div>                            </div>                        </div>                        <div class="col-lg-4 col">                            <div class="team-profile-img">                                <div class="avatar-lg img-thumbnail rounded-circle flex-shrink-0">'+m+'</div>                                <div class="team-content">                                    <a class="member-name" data-bs-toggle="offcanvas" href="#member-overview" aria-controls="member-overview">                                        <h5 class="fs-16 mb-1">'+e.memberName+'</h5>                                    </a>                                    <p class="text-muted member-designation mb-0">'+e.position+'</p>                                </div>                            </div>                        </div>                        <div class="col-lg-4 col">                            <div class="row text-muted text-center">                                <div class="col-6 border-end border-end-dashed">                                    <h5 class="mb-1 projects-num">'+e.projects+'</h5>                                    <p class="text-muted mb-0">Projects</p>                                </div>                                <div class="col-6">                                    <h5 class="mb-1 tasks-num">'+e.tasks+'</h5>                                    <p class="text-muted mb-0">Tasks</p>                                </div>                            </div>                        </div>                        <div class="col-lg-2 col">                            <div class="text-end">                                <a href="pages-profile.html" class="btn btn-light view-btn">View Profile</a>                            </div>                        </div>                    </div>                </div>            </div>        </div>',bookmarkBtn(),editMemberList(),removeItem(),memberDetailShow()})}function bookmarkBtn(){Array.from(document.querySelectorAll(".favourite-btn")).forEach(function(e){e.addEventListener("click",function(){e.classList.contains("active")?e.classList.remove("active"):e.classList.add("active")})})}fetch(url+"team-member-list.json").then(e=>e.json()).then(e=>{loadTeamData(allmemberlist=e)}).catch(e=>console.error(e)),bookmarkBtn();var editlist=!1;function editMemberList(){var r;Array.from(document.querySelectorAll(".edit-list")).forEach(function(t){t.addEventListener("click",function(e){r=t.getAttribute("data-edit-id"),allmemberlist=allmemberlist.map(function(e){return e.id==r&&(editlist=!0,document.getElementById("createMemberLabel").innerHTML="Edit Member",document.getElementById("addNewMember").innerHTML="Save",""==e.memberImg?document.getElementById("member-img").src="assets/images/users/user-dummy-img.jpg.jpg":document.getElementById("member-img").src=e.memberImg,document.getElementById("cover-img").src=e.coverImg,document.getElementById("memberid-input").value=e.id,document.getElementById("teammembersName").value=e.memberName,document.getElementById("designation").value=e.position,document.getElementById("project-input").value=e.projects,document.getElementById("task-input").value=e.tasks,document.getElementById("memberlist-form").classList.remove("was-validated")),e})})})}function fetchIdFromObj(e){return parseInt(e.id)}function findNextId(){var e,t;return 0===allmemberlist.length?0:(e=fetchIdFromObj(allmemberlist[allmemberlist.length-1]))<=(t=fetchIdFromObj(allmemberlist[0]))?t+1:e+1}function sortElementsById(){loadTeamData(allmemberlist.sort(function(e,t){e=fetchIdFromObj(e),t=fetchIdFromObj(t);return t<e?-1:e<t?1:0}))}function removeItem(){var r;Array.from(document.querySelectorAll(".remove-list")).forEach(function(t){t.addEventListener("click",function(e){r=t.getAttribute("data-remove-id"),document.getElementById("remove-item").addEventListener("click",function(){var t;t=r,loadTeamData(allmemberlist=allmemberlist.filter(function(e){return e.id!=t})),document.getElementById("close-removeMemberModal").click()})})})}function memberDetailShow(){Array.from(document.querySelectorAll(".team-box")).forEach(function(a){a.querySelector(".member-name").addEventListener("click",function(){var e=a.querySelector(".member-name h5").innerHTML,t=a.querySelector(".member-designation").innerHTML,r=a.querySelector(".member-img")?a.querySelector(".member-img").src:"assets/images/users/user-dummy-img.jpg.jpg",m=a.querySelector(".team-cover img").src,i=a.querySelector(".projects-num").innerHTML,n=a.querySelector(".tasks-num").innerHTML;document.querySelector("#member-overview .profile-img").src=r,document.querySelector("#member-overview .team-cover img").src=m,document.querySelector("#member-overview .profile-name").innerHTML=e,document.querySelector("#member-overview .profile-designation").innerHTML=t,document.querySelector("#member-overview .profile-project").innerHTML=i,document.querySelector("#member-overview .profile-task").innerHTML=n})})}document.querySelector("#member-image-input").addEventListener("change",function(){var e=document.querySelector("#member-img"),t=document.querySelector("#member-image-input").files[0],r=new FileReader;r.addEventListener("load",function(){e.src=r.result},!1),t&&r.readAsDataURL(t)}),document.querySelector("#cover-image-input").addEventListener("change",function(){var e=document.querySelector("#cover-img"),t=document.querySelector("#cover-image-input").files[0],r=new FileReader;r.addEventListener("load",function(){e.src=r.result},!1),t&&r.readAsDataURL(t)}),Array.from(document.querySelectorAll(".addMembers-modal")).forEach(function(e){e.addEventListener("click",function(e){document.getElementById("createMemberLabel").innerHTML="Add New Members",document.getElementById("addNewMember").innerHTML="Add Member",document.getElementById("teammembersName").value="",document.getElementById("designation").value="",document.getElementById("cover-img").src="assets/images/small/img-9.jpg",document.getElementById("member-img").src="assets/images/users/user-dummy-img.jpg.jpg",document.getElementById("memberlist-form").classList.remove("was-validated")})}),function(){"use strict";var e=document.querySelectorAll(".needs-validation");Array.prototype.slice.call(e).forEach(function(s){s.addEventListener("submit",function(e){var t,r,m,i,n,a,o,l;s.checkValidity()?(e.preventDefault(),t=document.getElementById("teammembersName").value,r=document.getElementById("designation").value,m=document.getElementById("member-img").src,i=document.getElementById("cover-img").src,n="assets/images/users/user-dummy-img.jpg.jpg"==m.substring(m.indexOf("/as")+1)?"":m,a=t.match(/\b(\w)/g).join("").substring(0,2),""===t||""===r||editlist?""!==t&&""!==r&&editlist&&(o=0,o=document.getElementById("memberid-input").value,allmemberlist=allmemberlist.map(function(e){return e.id==o?{id:o,coverImg:i,bookmark:e.bookmark,memberImg:m,nickname:a,memberName:t,position:r,projects:document.getElementById("project-input").value,tasks:document.getElementById("task-input").value}:e}),editlist=!1):(l=findNextId(),allmemberlist.push({id:l,coverImg:i,bookmark:!1,memberImg:n,nickname:a,memberName:t,position:r,projects:"0",tasks:"0"}),sortElementsById()),loadTeamData(allmemberlist),document.getElementById("createMemberBtn-close").click()):(e.preventDefault(),e.stopPropagation()),s.classList.add("was-validated")},!1)})}();var searchMemberList=document.getElementById("searchMemberList");searchMemberList.addEventListener("keyup",function(){var e=searchMemberList.value.toLowerCase();t=e;var t,e=allmemberlist.filter(function(e){return-1!==e.memberName.toLowerCase().indexOf(t.toLowerCase())||-1!==e.position.toLowerCase().indexOf(t.toLowerCase())});0==e.length?(document.getElementById("noresult").style.display="block",document.getElementById("teamlist").style.display="none"):(document.getElementById("noresult").style.display="none",document.getElementById("teamlist").style.display="block"),loadTeamData(e)});