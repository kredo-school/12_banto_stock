// vite.config.js

import { defineConfig } from 'vite'

export default defineConfig({
  base: '/public/', // Laravelのpublicディレクトリに設定
  server: {
    proxy: {
      '/': 'http://localhost', // Laravelのローカルサーバーをプロキシ
    },
  },
})

