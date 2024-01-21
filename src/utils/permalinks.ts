import { trim } from './utils'
import { SITE } from './config'

export const trimSlash = (s: string) => trim(trim(s, '/'));
const createPath = (...params: string[]) => {
    const paths = params
        .map((el) => trimSlash(el))
        .filter((el) => !!el)
        .join('/');
    return '/' + paths + (SITE.trailingSlash && paths ? '/' : '');
};

const BASE_PATHNAME = SITE.base || '/';

export const getPermalink = (slug = '', type = 'page'): string => {
    let permalink: string;

    switch (type) {
        case 'page':
        default:
            permalink = createPath(slug);
            break;
    }

    return definitivePermalink(permalink);
};

const definitivePermalink = (permalink: string): string => createPath(BASE_PATHNAME, permalink);

export const getHomePermalink = (): string => getPermalink('/');