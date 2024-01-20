import { getPermalink, getBlogPermalink, getAsset } from './utils/permalinks';

export const headerData = {
  links: [
    {
      text: 'Inicio',
      href: getPermalink('/')
    },
    {
      text: 'Nosotros',
      href: getPermalink('/about')
    },
    {
      text: 'Servicios',
      href: getPermalink('/services')
    },
    {
      text: 'Contacto',
      href: getPermalink('/contact')
    }
  ],
};

export const footerData = {
  links: [
    {
      title: 'Nosotros',
      links: [
        { text: 'Sobre nosotros', href: '/about' },
        { text: 'Servicios', href: '/services' },
        { text: 'Experiencia', href: '/' },
      ],
    },
    {
      title: 'Contáctanos',
      links: [
        { text: '+51 901013293' },
        { text: '01 - 7012382' },
        { text: 'comercial@pylconsultoriae' },
      ],
    }
  ],
  socialLinks: [
    { ariaLabel: 'LinkedIn', icon: 'tabler:brand-linkedin', href: 'https://www.linkedin.com/company/pyl-consultor%C3%ADa/' },
  ],
  footNote:
    `<div class="flex place-items-center">  
      <span class="w-25 h-25 md:w-20 md:h-20 md:-mt-0.5 bg-cover mr-1.5 rtl:mr-0 rtl:ml-1.5 float-left rtl:float-right rounded-sm bg-[url(https://media.licdn.com/dms/image/D560BAQECtO1VbS8UBQ/company-logo_200_200/0/1682453136635?e=1714003200&v=beta&t=xef1nTXtWHsDUQQd41ZbZwWbRCGqbpYxWDRAg_PctVk)]"></span>
      Made by <a class="text-blue-600 hover:underline dark:text-gray-200 ml-1" href="https://www.linkedin.com/company/pyl-consultor%C3%ADa/"> P&L</a> · All rights reserved.  
  </div>`
};