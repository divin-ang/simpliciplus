import { useEffect, useState } from 'react'
import MaterialIcon from 'react-google-material-icons'
import "../../../css/NavBar.css"
import Bootstrap from "bootstrap"
import { Link, Redirect } from 'react-router-dom'
import { useHistory } from "react-router-dom";
import axios from 'axios'
import { reinforceContrast } from "../../Services/ReinforceContrast"
import { handleBrightSupression } from "../../Services/handleBrightSupression"
import { handleBright } from "../../Services/handleBright"

//import "../../../../public/css/app.css"
const NavBar = () => {
  //go back function
  let history = useHistory();
  let back = () => {
    history.goBack()
  }
  //go to homepage

  // handle the menu nav opening
  let openNav = () => {

    if ($(window).width() >= 700) {
      document.getElementById("mySidenav").style.width = "30%";// mySidenav in Menu component
    } else {
      document.getElementById("mySidenav").style.width = "80%";
    }
    handleBright()

    //document.getElementById("menu-container").setAttribute("filter",'brightness(30%)'    
  }

  let close = () => {
    document.getElementById("b").addEventListener("click", () => {
      document.getElementById("mySidenav").style.width = "0%";

      $("#mySidenav").css("width", "0%");
      handleBrightSupression()
    })
  }
  let contrast = () => {
    /*  */
    $(".contrast-container").css({ display: "block" })
    handleBright()
  }

  let reinforceContrastCall = () => {
    if (sessionStorage.getItem("contrast") === "reinforced") {
      reinforceContrast()
    }
  }

  useEffect(() => {
    close()
    reinforceContrastCall()

  })

  return (
    <nav className="container-fluid sticky-top backdrop" id="menu-container">

      {//sider bar code for menu 
      }

      <div className="row" id="menu-container" >

        <button className="col-2 col_margin" role="button" title="Retour en arrière" onClick={back}>
          <span className="material-icons-outlined  navbarspan back_icon" aria-hidden="true">arrow_back</span>
          <span className="back_text  navbarspan">Retour</span>
        </button>


        <button className="col-2 col_margin" title="Retour à l'accueil" role="button" >
          <Link to="/" style={{ textDecoration: "none", color: "#fff", display: "block" }}><span className="material-icons-outlined home_icon" aria-hidden="true">home</span></Link>
          <Link to="/" style={{ textDecoration: "none", color: "#fff", display: "block" }} className="home_text">Accueil</Link>
        </button>
        <div className="col-4 page_title" id="title-simplici">
          <p>Simpl'ici +</p>
        </div>

        <button className="col-2 col_margin" onClick={openNav} title="menu" role="button">
          <span className="material-icons-outlined  navbarspan menu_icon" aria-hidden="true">menu</span>
          <span className="menu_text  navbarspan">Menu</span>
        </button>

        <button className="col-2 col_margin" title="Retour à l'accueil" onClick={contrast} role="button">
          <span className="material-icons-outlined  navbarspan accessibility_icon" aria-hidden="true">visibility</span>
          <span className="accessibility_text  navbarspan">Accessibilité</span>
        </button>
      </div>
    </nav>

  )
}
export default NavBar