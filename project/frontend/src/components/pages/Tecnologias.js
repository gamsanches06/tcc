import styles from './Tecnologias.module.css'

function Tecnologias() {
    return (
        <section className={styles.tecno_container}>
            <h1><span>Docker</span></h1>
            <p>Docker é um conjunto de produtos de plataforma como serviço que usam virtualização de nível de sistema operacional para entregar software em pacotes chamados contêineres. Os contêineres são isolados uns dos outros e agrupam seus próprios softwares, bibliotecas e arquivos de configuração.</p>
            <h1><span>React JS</span> </h1>
            <p>O React é uma biblioteca JavaScript de código aberto com foco em criar interfaces de usuário em páginas web. É mantido pelo Facebook, Instagram, outras empresas e uma comunidade de desenvolvedores individuais.</p>
            <h1><span>Spring Framework</span></h1>
            <p>O Spring é um framework open source para a plataforma Java criado por Rod Johnson e descrito em seu livro "Expert One-on-One: JEE Design e Development". Trata-se de um framework não intrusivo, baseado nos padrões de projeto inversão de controle e injeção de dependência.</p>
            <h1><span>Symfony Framework</span></h1>
            <p>Symfony é um framework livre do tipo fullstack para desenvolvimento de aplicações web, com a linguagem PHP e o paradigma MVC, disponível sob a Licença MIT. É uma ferramenta com o uso via uma interface gráfica acessada via navegador web.</p>
        </section>
    )
}

export default Tecnologias