let config = {
  env: 'dev', // local: dev; staging/systest: sys; production/demo: prod
  apiEnv: 'PRD',
  testEmail: 'qa@dr.com',
  adminUserName: {
    dev: 'username', //localhost admin username
    sys: 'username',
    prod: 'username',
    demo: 'username',
  },
  adminPassword: {
    dev: 'username', //localhost admin username
    sys: 'username',
    prod: 'username',
    demo: 'username',
  },
  baseUrl: {
    dev: 'http://localhost/wordpress/',
    sys: 'http://tpedevapp0264.d010.digitalriverws.net/',
    prod: 'http://wordpress.c141.digitalriverws.net/',
    demo: 'http://gcwpdemo.wpengine.com',
  },
  apiUrl: {
    PRD: 'https://api.digitalriver.com',
    NONPRD: 'https://dispatch-test.digitalriver.com',
  },
  drSettings: {
    siteID:     'drdod15',
    apiKey:     '99477953970e432da4d89b982f6bcc49',
    apiSecret:  'a4dccc3558ec4e09ae2879864f900f24',
    domainInput:  'api.digitalriver.com',
    pluginKey:  '6eb251a648bc4e6b87b24671262f2e91',
  },
};

module.exports = config;
