import merge from 'lodash.merge';

export interface AnalyticsConfig {
    vendors: {
        googleAnalytics: {
            id?: string;
            partytown?: boolean;
        };
    };
}

export interface SiteConfig {
    name: string;
    site?: string;
    base?: string;
    trailingSlash?: boolean;
    googleSiteVerificationId?: string;
}

const DEFAULT_SITE_NAME = 'P&L Consultoría Estratégica';

const getSite = () => {
    const _default = {
        name: DEFAULT_SITE_NAME,
        site: 'https://www.pylconsultoriae.com/',
        base: '/',
        trailingSlash: false,
    };

    return merge({}, _default) as SiteConfig;
};

const getUI = () => {
    const _default = {
        theme: 'white',
        classes: {},
        tokens: {},
    };

    return merge({}, _default);
};

const getAnalytics = () => {
    const _default = {
        vendors: {
            googleAnalytics: {
                id: undefined,
                partytown: true,
            },
        },
    };

    return merge({}, _default) as AnalyticsConfig;
};

export const SITE = getSite();
export const UI = getUI();
export const ANALYTICS = getAnalytics();
