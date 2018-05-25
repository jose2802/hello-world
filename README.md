<h1> :scroll: Documentación :scroll:</h1>

[![style: styled-components](https://img.shields.io/badge/style-%F0%9F%92%85%20styled--components-orange.svg?colorB=daa357&colorA=db748e)](https://github.com/styled-components/styled-components)


:exclamation: Todos los push al branch master actualizan la página en heroku: https://xelborredesign.herokuapp.com/ :exclamation:


En la carpeta src se encuentran 2 carpetas; 

- Components => contiene todos los componentes que forman la estructura de la página
- Images => contiene las imágenes


{ El archivo /src/index.js, llama los componentes para renderizarlos. }


 <h1> Antd config </h1> 

```
$ yarn add react-app-rewired --dev
```

and change the start, build and test scripts on the package.json as:
```json
/* package.json */
"scripts": {
 "start": "react-app-rewired start",
 "build": "react-app-rewired build", 
 "test": "react-app-rewired test --env=jsdom",
}
```

Then create a config-overrides.js at root directory of your project for further overriding.

```javascript
module.exports = function override(config, env) {
  // do stuff with the webpack config...
  return config;
};
```

```
$ yarn add babel-plugin-import --dev
```

```javascript
+ const { injectBabelPlugin } = require('react-app-rewired');

  module.exports = function override(config, env) {
+   config = injectBabelPlugin(['import', { libraryName: 'antd', libraryDirectory: 'es', style: 'css' }], config);
    return config;
  };
```

So, you can import antd components as:

```javascript
 import { Button } from 'antd';
```


 <h1> Antd components with styled-components </h1>

```javascript
import styled from 'styled-components'
import reset from 'reset-css';
import { Col } from 'antd';

export const Column = styled(Col)`
font-size: 1.5em;
color: #00000;
background-color: #FFFFF;
`;
```
