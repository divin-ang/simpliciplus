
import { a } from "react-router-dom"
import Breadcrumbs from "../Breadcrumbs/Breadcrumbs"
import Contrast from "../Contrast/Contrast"
import Menu from "../NavBar/Menu"
import NavBar from "../NavBar/NavBar"
import GrandChambery from "./logos/Grand-Chambery.png"
// import "../../../css/Administration.css"
import chambery from "./logos/chambery.png"
import poleEmploi from "./logos/pole-emploi.svg"
import caf from "./logos/caf.svg"
import poste from "./logos/poste.svg"
import maladie from "./logos/maladie.svg"
import retraite from "./logos/retraite.svg"
import Footer from "../LegalInfo/Footer"

const Administration = () => {

    return (

        <div>
            <div>
                <div id="side">
                    <Menu></Menu>
                    <Contrast></Contrast>
                </div>

            </div>
            <div id="contain" className='contain-home'>
                <NavBar></NavBar>
                <div className="bread-text">
                    <Breadcrumbs></Breadcrumbs>
                </div>
                <div className="administration-container">

                    <h2 className="administration-title">Je choisi une administration</h2>

                    <div className="top-botom">
                        <a className="grand-chambery  top-botom administration-item" href="https://www.grandchambery.fr/">
                            <p className="administration-text">Grand Chambéry</p>
                            <img className="administration-image" src={GrandChambery}></img>

                        </a>

                        <a className="chambery  administration-item" href="https://simplici.chambery.fr/">
                            <p className="administration-text">Ville de Chambéry</p>
                            <img className="administration-image" src={chambery}></img>

                        </a>


                    </div>


                    <div>
                        <a className="chambery administration-item" href="https://www.pole-emploi.fr/">
                            <p className="administration-text">Pôle Emploi</p>
                            <img className="administration-image" src={poleEmploi}></img>

                        </a>
                        <a className="chambery administration-item" href="https://www.caf.fr/">
                            <p className="administration-text">Caisse Nationale des Allocations Familiales</p>
                            <img className="administration-image" src={caf}></img>

                        </a>
                        <a className="chambery administration-item" href="https://www.laposte.fr/">
                            <p className="administration-text">La poste</p>
                            <img className="administration-image" src={poste}></img>

                        </a>




                    </div>
                    <div className="top-botom">
                        <a className="chambery administration-item" href="https://www.ameli.fr/">
                            <p className="administration-text">L'Assurance Maladie</p>
                            <img className="administration-image" src={maladie}></img>

                        </a>
                        <a className="chambery administration-item" href="https://www.lassuranceretraite.fr/">
                            <p className="administration-text">L'Assurance retraite</p>
                            <img className="administration-image" src={retraite}></img>

                        </a>

                    </div>
                    <Footer></Footer>

                </div>

            </div>
        </div>
    )
}
export default Administration