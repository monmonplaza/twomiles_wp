// TOOGLE MENU
const menu = document.querySelector("#toggle-menu");
const mobileNav = document.querySelector(".mobile-nav");
const mobileNavLi = document.querySelector(".mobile-nav li");
menu.addEventListener("click", () => {
  menu.classList.toggle("open-menu");
  mobileNav.classList.toggle("mobile-nav-open");
  //document.querySelector("header").classList.toggle("body-fixed");
});

mobileNavLi.addEventListener("click", function() {
  menu.classList.remove("open-menu");
  mobileNav.classList.remove("mobile-nav-open");
  // document.querySelector("header").classList.remove("body-fixed");
});
// TOOGLE MENU END

var employeeBoxes = document.querySelectorAll(".employee-box");
var employeeContents = document.querySelectorAll(".employee-content");

function selectMember(e) {
  e.preventDefault();
  removeActiveEmp();
  this.classList.add("active-emp");
  const activeEmp = document.querySelector(`#${this.id}-content`);
  removeActiveEmpDetail();
  activeEmp.classList.add("active-emp-detail");
  //console.log(activeEmp);
}

//LANGUAGE SELECT

const activeLanguage = document.querySelector("html");
const selectedLanguage = document.querySelectorAll(".option a");
const engBtn = document.querySelector('.option a[title="English"]');
const japBtn = document.querySelector('.option a[title="Japanese"]');
let htmlLang = activeLanguage.getAttribute("lang");

engBtn.addEventListener("click", () => {
  engBtn.style.display = "none";
  japBtn.style.display = "block";
});
japBtn.addEventListener("click", () => {
  engBtn.style.display = "block";
  japBtn.style.display = "none";
});

//DOM LOAD
window.addEventListener("DOMContentLoaded", () => {
  //language onload
  engBtn.style.display = "block";
  japBtn.style.display = "block";

  addEmployeeIDLink();
  addEmployeeIDContent();
  //Management
  addManagementIDContent();
  addManagementIDLink();

  removeActiveEmp();
  document.getElementById("employee-0").classList.add("active-emp");

  removeActiveEmpDetail();
  document
    .getElementById("employee-0-content")
    .classList.add("active-emp-detail");
});

// EMPLOYEE TAB

function removeActiveEmp() {
  employeeBoxes.forEach(employeebox => {
    employeebox.classList.remove("active-emp");
  });
}

function addEmployeeIDContent() {
  employeeContents.forEach(function(employee, i) {
    employee.setAttribute("id", "employee-" + [i] + "-content");
  });
}

function addEmployeeIDLink() {
  employeeBoxes.forEach(function(employeeBox, i) {
    employeeBox.setAttribute("id", "employee-" + [i]);
  });
}

function removeActiveEmpDetail() {
  employeeContents.forEach(employeeContent => {
    employeeContent.classList.remove("active-emp-detail");
  });
}

employeeBoxes.forEach(box => box.addEventListener("click", selectMember));

// ACCORDION FAQ ABOUT PAGE

const faqBoxes = document.querySelectorAll(".about-faq-box-question");

faqBoxes.forEach(function(faqBox) {
  faqBox.addEventListener("click", () => {
    faqBox.classList.toggle("active-answer");
    faqBox.nextElementSibling.classList.toggle("active-question");
  });
});

// MAP TAB SCRIPT
const mapOffice = document.querySelectorAll(".map-office");
const mapBtns = document.querySelectorAll(".map-btn");
// hide all map
function hideMap() {
  mapOffice.forEach(function(office) {
    office.classList.remove("map-office-active");
  });
}

function removeMapActive() {
  mapBtns.forEach(function(mapBtn) {
    mapBtn.classList.remove("map-btn-active");
  });
}

function selectMap() {
  removeMapActive();
  this.classList.add("map-btn-active");
  const selectedMap = document.getElementById(`${this.id}-office`);
  hideMap();
  selectedMap.classList.add("map-office-active");
  console.log("123");
}

mapBtns.forEach(mapBtn => {
  mapBtn.addEventListener("click", selectMap);
});

//MANAGEMENT TAB
const mgtContent = document.querySelectorAll(".management-tab-content");
const mgtBtn = document.querySelectorAll(".management-tab-btn");

function selectManagement() {
  removeMgTabActive();
  this.classList.add("management-tab-active");
  const selectedManagement = document.getElementById(`${this.id}-content`);
  removeMgtContentActive();
  selectedManagement.classList.add("management-content-active");
}

function removeMgtContentActive() {
  mgtContent.forEach(function(tab) {
    tab.classList.remove("management-content-active");
  });
}

function removeMgTabActive() {
  mgtBtn.forEach(function(btn) {
    btn.classList.remove("management-tab-active");
  });
}

mgtBtn.forEach(function(tab) {
  tab.addEventListener("click", selectManagement);
});

function addManagementIDContent() {
  mgtContent.forEach(function(mgtContent, i) {
    mgtContent.setAttribute("id", "management-" + [i] + "-content");
  });
}

function addManagementIDLink() {
  mgtBtn.forEach(function(mgtBtn, i) {
    mgtBtn.setAttribute("id", "management-" + [i]);
  });
}

const megaMenu = document.querySelector(".mega-menu");
const serviceLink = document.querySelector(".menu-drop");
const menuLinks = document.querySelectorAll(".menu-item");

menuLinks.forEach(function(link) {
  link.addEventListener("mouseover", () => {
    megaMenu.style.display = "none";
  });
});

serviceLink.addEventListener("mouseover", () => {
  megaMenu.style.display = "block";
});

megaMenu.addEventListener("mouseleave", () => {
  megaMenu.style.display = "none";
});
