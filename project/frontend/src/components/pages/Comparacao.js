
import { Link } from 'react-router-dom'

import styles from './Comparacao.module.css'


function Comparacao() {
    return (
        <section className={styles.comparacao_container}>
        <h1><span>Frameworks comparados</span></h1>
       
        <u className={styles.buttons}>
                    <button>
                        <Link to="/spring">Spring Framework</Link>
                    </button>
                    <button className={styles.item}>
                        <Link to="/symfony">Symfony Framework</Link>
                    </button>
                    <button className={styles.item}>
                        <Link to="/node">Node JS</Link>
                    </button>
                </u>
       </section>
    )
}

export default Comparacao