/** @type {import('next').NextConfig} */
const withPWA = require("next-pwa");
const runtimeCaching = require("next-pwa/cache");
const { i18n } = require("./next-i18next.config");

module.exports = withPWA({
  i18n,
  pwa: {
    //disable: process.env.NODE_ENV === "development",
    startUrl: '/grocery',
    disabled: true,    
    dest: "public",
    runtimeCaching,
  },
  eslint: {
    // Warning: This allows production builds to successfully complete even if
    // your project has ESLint errors.
    ignoreDuringBuilds: true,
  },
  reactStrictMode: true,
  async redirects() {
    return [
      {
        source: "/",
        destination: "/grocery",
        permanent: false,
      },
    ];
  },
  images: {
    domains: [
      "googleusercontent.com",
      "graph.facebook.com",
      "res.cloudinary.com",
      "s3.amazonaws.com",
      "18.141.64.26",
      "via.placeholder.com",
      "pickbazarlaravel.s3.ap-southeast-1.amazonaws.com",
      "picsum.photos",
      "lh3.googleusercontent.com",
    ],
  },
  typescript: {
    ignoreBuildErrors: true,
  },
});
