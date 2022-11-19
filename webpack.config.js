const path = require('path');

module.exports = {
  mode:'production',
  watch:true,
  module:{rules:[
    {
      test:/\.css$/i,
      use:['style-loader','css-loader']
    }
  ]}
  ,
  output: {
    path: path.resolve(__dirname, 'public/build/js'),
    filename: 'app.js'
  },
  entry: {
    main: './src/js/app.js'
  }
}