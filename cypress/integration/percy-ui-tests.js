describe('UI Regression Testing on all pages', () => {
    //for each URL do the thing
    const urls = [
      '/',
      '/media/',
      '/small-business/online-presence-management/',
      '/digital-marketing/',
      '/digital-marketing/content-creation/',
      '/digital-marketing/email-marketing/',
      '/digital-marketing/paid-search/',
      '/digital-marketing/search-engine-optimization/',
      '/digital-marketing/search-engine-optimization/voice/',
      '/digital-marketing/social-media/',
      '/digital-marketing/video-marketing/',
      '/media/photography/',
      '/media/signa-audio/',
      '/media/video-production/',
      '/web-development/custom-websites/',
      '/web-development/ecommerce-websites/',
      '/web-development/google-amp-services/',
      '/small-business/facebook-advertising/',
      '/small-business/paid-search-management/',
      '/small-business/videos/',
      '/creative/',
      '/creative/design-services/',
      '/what-we-do/',
      '/start-now/',
      '/privacy-and-cookie-policy/',
      '/get-seo-report/',
      '/competitive-analysis/',
      '/contact-us/',
      '/who-we-are/',
      '/thank-you-contact/',
      '/digital-pulse-newsletter/',
      '/thank-you-google-ads-audit/',
      '/google-ads-audit/',
      '/web-development/',
      '/creative/brand-identity/',
      '/small-business/',
      '/digital-marketing/analytics-insights/',
      '/hispanic-marketing/',
      '/ecommerce-marketing/',
      '/automotive-marketing/'
    ]
  
    urls.forEach(url => {
      it('Visit Page and Take Snapshot', function() {
      // Load the page or perform any other interactions with the app.
      cy.visit(url);
      cy.scrollTo('bottom');
      cy.screenshot();
      // Take a snapshot for visual diffing
      cy.percySnapshot();
      });
      
      
    });
  });