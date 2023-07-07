import type { NextPage } from 'next'
import Titulo from '../ui/components/Titulo/Titulo';
import Lista from '../ui/components/Lista/Lista'

const Home: NextPage = () => {
  return (
    <div >
      <Titulo
        titulo=""
        subtitulo={
          <span>Com um pequeno valor mensal, você <br />
            pode <strong>adotar um pet virtualmente</strong>
          </span>
        } />

        <Lista 
        pets={[
          {
            id: 1,
            nome: 'Bidu',
            historia: 'kvjdhvmpkgrghhvimpekvojihgvnevmoejvhiemojvepejmv0ewjlhkgibnyrhvnrvnuie4rfucneuicnuiernfcybrvrnfcurnbcvyiernuncrciuniuexcen',
            foto: 'https://media.gazetadopovo.com.br/viver-bem/2018/11/dog3-600x459-0e01be20.jpg'
          },
          {
            id: 2,
            nome: 'Scooby',
            historia: 'kvjdhvmpkgrghhvimpekvojihgvnevmoejvhiemojvepejmv0ewjeuicnuiernfcybrvrnfcurnbcvyiernuncrciuniuexcen',
            foto: 'https://super.abril.com.br/wp-content/uploads/2018/05/filhotes-de-cachorro-alcanc3a7am-o-c3a1pice-de-fofura-com-8-semanas1.png'
          },
        ]}
        />
    </div>
  )
}

export default Home
