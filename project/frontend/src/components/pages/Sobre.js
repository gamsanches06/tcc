import styles from './Sobre.module.css'
import sobre from '../../img/sobre.png'


function Sobre() {
    return (
        <section className={styles.sobre_container}>

            <h1><span>Sobre nós</span></h1>
            <p>Somos um grupo de três estudantes de Ciências da Computação, na Universidade Paulista - UNIP.
                Apaixonados pela tecnologia e suas capacidades, decidimos criar esse projeto de conclusão de curso no intuito de demonstrar
                o poder de cada framework escolhido, comparando sua performance, implementação, custo, manutenção etc.
                Ao final deste trabalho, conseguiremos ter uma visão geral da melhor escolha para determinada finalidade, seja para uma empresa,
                projeto pessoal ou afins de estudo.</p>

            <div className={styles.imagem}>
            <img src={sobre} alt="Sobre nós" />
            <p>Da esquerda pra direita: Giovani Sanches, Yago Motti e Felipe Milani</p>
            </div>
        </section>
    )
}

export default Sobre
