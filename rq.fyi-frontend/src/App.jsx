import { useEffect } from 'react';
import api from './api';

function App() {
  useEffect(() => {
    api.get('/api/test')
      .then(res => console.log(res.data))
      .catch(err => console.error(err));
  }, []);

  return <h1>Check browser console</h1>;
}

export default App;