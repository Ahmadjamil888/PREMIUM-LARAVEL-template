<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8" />
  <meta name="theme-color" content="#000000" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>AI chatbot template - AI Assistant</title>
  <style>
    /* Professional Black & White Theme */
    * {
      box-sizing: border-box;
    }
    
    body {
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', sans-serif;
      background-color: #ffffff;
      color: #000000;
      line-height: 1.6;
    }
    
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 24px;
    }
    
    .section {
      padding: 80px 0;
    }
    
    .section-title {
      font-size: 36px;
      font-weight: 700;
      color: #000000;
      text-align: center;
      margin: 0 0 16px 0;
      letter-spacing: -0.025em;
    }
    
    .section-subtitle {
      font-size: 18px;
      color: #666666;
      text-align: center;
      margin: 0 0 60px 0;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
    }
    
    /* Header */
    .header {
      border-bottom: 1px solid #e0e0e0;
      background: #ffffff;
      padding: 20px 0;
      position: sticky;
      top: 0;
      z-index: 100;
    }
    
    .header-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .logo {
      font-size: 24px;
      font-weight: 700;
      color: #000000;
      text-decoration: none;
      letter-spacing: -0.025em;
    }
    
    .nav {
      display: flex;
      gap: 32px;
    }
    
    .nav-link {
      color: #000000;
      text-decoration: none;
      font-size: 14px;
      font-weight: 500;
      transition: color 0.15s ease;
    }
    
    .nav-link:hover {
      color: #666666;
    }
    
    /* Hero Section */
    .hero {
      text-align: center;
      padding: 120px 0;
      background: #ffffff;
    }
    
    .hero-title {
      font-size: 56px;
      font-weight: 700;
      color: #000000;
      margin: 0 0 24px 0;
      letter-spacing: -0.05em;
      line-height: 1.1;
    }
    
    .hero-subtitle {
      font-size: 24px;
      color: #666666;
      margin: 0 0 48px 0;
      font-weight: 400;
      line-height: 1.4;
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
    }
    
    .hero-actions {
      display: flex;
      justify-content: center;
      gap: 16px;
      margin-bottom: 80px;
    }
    
    .btn {
      padding: 16px 32px;
      font-size: 16px;
      font-weight: 500;
      border-radius: 6px;
      cursor: pointer;
      transition: all 0.15s ease;
      text-decoration: none;
      display: inline-block;
      text-align: center;
      border: 1px solid;
      min-width: 160px;
    }
    
    .btn-primary {
      background: #000000;
      color: #ffffff;
      border-color: #000000;
    }
    
    .btn-primary:hover {
      background: #333333;
      border-color: #333333;
    }
    
    .btn-secondary {
      background: #ffffff;
      color: #000000;
      border-color: #cccccc;
    }
    
    .btn-secondary:hover {
      background: #f5f5f5;
      border-color: #999999;
    }
    
    .btn:active {
      transform: translateY(1px);
    }
    
    /* Features Section */
    .features {
      background: #f8f8f8;
    }
    
    .features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 40px;
    }
    
    .feature {
      background: #ffffff;
      padding: 40px;
      border-radius: 8px;
      border: 1px solid #e0e0e0;
      text-align: center;
    }
    
    .feature-icon {
      width: 60px;
      height: 60px;
      background: #000000;
      border-radius: 50%;
      margin: 0 auto 24px auto;
    }
    
    .feature-title {
      font-size: 20px;
      font-weight: 600;
      color: #000000;
      margin: 0 0 16px 0;
    }
    
    .feature-description {
      font-size: 16px;
      color: #666666;
      margin: 0;
      line-height: 1.6;
    }
    
    /* About Section */
    .about {
      background: #ffffff;
    }
    
    .about-content {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 80px;
      align-items: center;
    }
    
    .about-text {
      padding: 40px 0;
    }
    
    .about-text h3 {
      font-size: 28px;
      font-weight: 600;
      color: #000000;
      margin: 0 0 24px 0;
      line-height: 1.3;
    }
    
    .about-text p {
      font-size: 16px;
      color: #666666;
      margin: 0 0 24px 0;
      line-height: 1.6;
    }
    
    .about-text p:last-child {
      margin-bottom: 0;
    }
    
    .about-image {
      background: #f8f8f8;
      border: 1px solid #e0e0e0;
      border-radius: 8px;
      height: 400px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #666666;
      font-size: 16px;
    }
    
    /* Stats Section */
    .stats {
      background: #000000;
      color: #ffffff;
    }
    
    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 60px;
      text-align: center;
    }
    
    .stat {
      padding: 20px;
    }
    
    .stat-number {
      font-size: 48px;
      font-weight: 700;
      color: #ffffff;
      margin: 0 0 8px 0;
    }
    
    .stat-label {
      font-size: 16px;
      color: #cccccc;
      margin: 0 0 8px 0;
      font-weight: 500;
    }
    
    .stat-description {
      font-size: 14px;
      color: #999999;
      margin: 0;
      line-height: 1.5;
    }
    
    /* Technology Section */
    .technology {
      background: #ffffff;
    }
    
    .tech-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 40px;
    }
    
    .tech-item {
      text-align: center;
      padding: 20px;
    }
    
    .tech-title {
      font-size: 18px;
      font-weight: 600;
      color: #000000;
      margin: 0 0 12px 0;
    }
    
    .tech-description {
      font-size: 14px;
      color: #666666;
      margin: 0;
      line-height: 1.5;
    }
    
    /* Use Cases Section */
    .use-cases {
      background: #f8f8f8;
    }
    
    .use-cases-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
    }
    
    .use-case {
      background: #ffffff;
      padding: 30px;
      border-radius: 8px;
      border: 1px solid #e0e0e0;
    }
    
    .use-case-title {
      font-size: 18px;
      font-weight: 600;
      color: #000000;
      margin: 0 0 16px 0;
    }
    
    .use-case-description {
      font-size: 15px;
      color: #666666;
      margin: 0 0 20px 0;
      line-height: 1.6;
    }
    
    .use-case-features {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    
    .use-case-features li {
      font-size: 14px;
      color: #666666;
      margin: 0 0 8px 0;
      padding-left: 20px;
      position: relative;
    }
    
    .use-case-features li:before {
      content: "•";
      position: absolute;
      left: 0;
      color: #000000;
    }
    
    /* CTA Section */
    .cta {
      background: #000000;
      color: #ffffff;
      text-align: center;
    }
    
    .cta-title {
      font-size: 32px;
      font-weight: 700;
      color: #ffffff;
      margin: 0 0 16px 0;
    }
    
    .cta-subtitle {
      font-size: 18px;
      color: #cccccc;
      margin: 0 0 40px 0;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
    }
    
    .cta-actions {
      display: flex;
      justify-content: center;
      gap: 16px;
    }
    
    .btn-white {
      background: #ffffff;
      color: #000000;
      border-color: #ffffff;
    }
    
    .btn-white:hover {
      background: #f5f5f5;
      border-color: #f5f5f5;
    }
    
    .btn-outline {
      background: transparent;
      color: #ffffff;
      border-color: #ffffff;
    }
    
    .btn-outline:hover {
      background: #ffffff;
      color: #000000;
    }
    
    /* Footer */
    .footer {
      border-top: 1px solid #e0e0e0;
      padding: 60px 0 40px 0;
      background: #ffffff;
    }
    
    .footer-content {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr 1fr;
      gap: 60px;
      margin-bottom: 40px;
    }
    
    .footer-brand {
      max-width: 300px;
    }
    
    .footer-logo {
      font-size: 20px;
      font-weight: 700;
      color: #000000;
      margin-bottom: 16px;
    }
    
    .footer-description {
      font-size: 14px;
      color: #666666;
      margin: 0;
      line-height: 1.6;
    }
    
    .footer-section h4 {
      font-size: 16px;
      font-weight: 600;
      color: #000000;
      margin: 0 0 20px 0;
    }
    
    .footer-links {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    
    .footer-links li {
      margin-bottom: 12px;
    }
    
    .footer-link {
      color: #666666;
      text-decoration: none;
      font-size: 14px;
      transition: color 0.15s ease;
    }
    
    .footer-link:hover {
      color: #000000;
    }
    
    .footer-bottom {
      border-top: 1px solid #e0e0e0;
      padding-top: 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .footer-text {
      font-size: 14px;
      color: #666666;
      margin: 0;
    }
    
    .footer-legal {
      display: flex;
      gap: 32px;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
      .header-content {
        flex-direction: column;
        gap: 20px;
      }
      
      .nav {
        gap: 24px;
      }
      
      .hero-title {
        font-size: 40px;
      }
      
      .hero-subtitle {
        font-size: 20px;
      }
      
      .hero-actions {
        flex-direction: column;
        align-items: center;
      }
      
      .btn {
        width: 100%;
        max-width: 280px;
      }
      
      .about-content {
        grid-template-columns: 1fr;
        gap: 40px;
      }
      
      .stats-grid {
        grid-template-columns: 1fr;
        gap: 40px;
      }
      
      .footer-content {
        grid-template-columns: 1fr;
        gap: 40px;
      }
      
      .footer-bottom {
        flex-direction: column;
        gap: 20px;
        text-align: center;
      }
      
      .cta-actions {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header class="header">
    <div class="container">
        <div class="header-content">
            <a href="#" class="logo">AI Chatbot</a>
            <nav class="nav">
                <a href="/" class="nav-link">Home</a>
                <a href="#features" class="nav-link">Features</a>
                <a href="#about" class="nav-link">About</a>
                <a href="#technology" class="nav-link">Technology</a>
                <a href="#support" class="nav-link">Support</a>
            </nav>
            <div class="auth-links">
                <a href="{{ route('login') }}" class="nav-link">Login</a>
                <a href="{{ route('register') }}" class="nav-link">Register</a>
            </div>
        </div>
    </div>
</header>
  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1 class="hero-title">AI Assistant Platform</h1>
      <p class="hero-subtitle">Enterprise-grade conversational AI designed for professional environments. Enhance productivity, streamline communication, and unlock intelligent automation across your organization.</p>
      
      <div class="hero-actions">
        <a href="/register" class="btn btn-primary">Start Free Trial</a>
        <a href="/login" class="btn btn-secondary">Schedule Demo</a>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="features section" id="features">
    <div class="container">
      <h2 class="section-title">Core Features</h2>
      <p class="section-subtitle">Advanced AI capabilities designed for professional use cases with enterprise-grade security and performance.</p>
      
      <div class="features-grid">
        <div class="feature">
          <div class="feature-icon"></div>
          <h3 class="feature-title">Advanced Natural Language Processing</h3>
          <p class="feature-description">State-of-the-art language understanding with context-aware responses, multi-turn conversations, and domain-specific knowledge adaptation for professional environments.</p>
        </div>
        <div class="feature">
          <div class="feature-icon"></div>
          <h3 class="feature-title">Enterprise Security & Compliance</h3>
          <p class="feature-description">Bank-grade encryption, SOC 2 compliance, GDPR adherence, and comprehensive audit trails. Your data remains secure with role-based access controls and privacy protection.</p>
        </div>
        <div class="feature">
          <div class="feature-icon"></div>
          <h3 class="feature-title">Multi-Modal Content Support</h3>
          <p class="feature-description">Process text, documents, images, and various file formats seamlessly. Extract insights from PDFs, analyze spreadsheets, and handle multimedia content with intelligent processing.</p>
        </div>
        <div class="feature">
          <div class="feature-icon"></div>
          <h3 class="feature-title">Custom Integration & APIs</h3>
          <p class="feature-description">Comprehensive REST APIs, webhook support, and pre-built integrations with popular business tools. Customize workflows and automate processes with enterprise-grade connectivity.</p>
        </div>
        <div class="feature">
          <div class="feature-icon"></div>
          <h3 class="feature-title">Real-Time Collaboration</h3>
          <p class="feature-description">Team-based chat environments, shared workspaces, and collaborative AI sessions. Enable multiple users to interact with AI simultaneously while maintaining context and history.</p>
        </div>
        <div class="feature">
          <div class="feature-icon"></div>
          <h3 class="feature-title">Analytics & Insights</h3>
          <p class="feature-description">Comprehensive usage analytics, performance metrics, and business intelligence dashboards. Track AI adoption, measure productivity gains, and optimize organizational workflows.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="about section" id="about">
    <div class="container">
      <div class="about-content">
        <div class="about-text">
          <h3>Built for Enterprise Excellence</h3>
          <p>LibreChat represents the next generation of enterprise AI platforms, designed specifically for organizations that demand reliability, security, and performance. Our platform combines cutting-edge artificial intelligence with robust enterprise infrastructure to deliver consistent, professional-grade results.</p>
          <p>We understand that every organization has unique requirements. That's why our platform is built with flexibility at its core, allowing seamless integration with existing workflows while providing the scalability needed for growing businesses.</p>
          <p>Trusted by Fortune 500 companies and innovative startups alike, LibreChat delivers measurable improvements in productivity, communication efficiency, and operational excellence across diverse industries and use cases.</p>
        </div>
        <div class="about-image">
          <span>Professional AI Platform Interface</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="stats section">
    <div class="container">
      <div class="stats-grid">
        <div class="stat">
          <div class="stat-number">99.9%</div>
          <div class="stat-label">Uptime Guarantee</div>
          <div class="stat-description">Enterprise-grade reliability with redundant infrastructure and 24/7 monitoring</div>
        </div>
        <div class="stat">
          <div class="stat-number">50M+</div>
          <div class="stat-label">Messages Processed</div>
          <div class="stat-description">Monthly conversation volume across our global platform infrastructure</div>
        </div>
        <div class="stat">
          <div class="stat-number">500+</div>
          <div class="stat-label">Enterprise Clients</div>
          <div class="stat-description">Organizations worldwide trust LibreChat for their AI communication needs</div>
        </div>
        <div class="stat">
          <div class="stat-number">24/7</div>
          <div class="stat-label">Global Support</div>
          <div class="stat-description">Round-the-clock technical support and customer success management</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Technology Section -->
  <section class="technology section" id="technology">
    <div class="container">
      <h2 class="section-title">Advanced Technology Stack</h2>
      <p class="section-subtitle">Built on proven technologies and industry-leading frameworks for maximum performance and reliability.</p>
      
      <div class="tech-grid">
        <div class="tech-item">
          <h3 class="tech-title">Machine Learning</h3>
          <p class="tech-description">Advanced neural networks with continuous learning capabilities and model optimization</p>
        </div>
        <div class="tech-item">
          <h3 class="tech-title">Cloud Infrastructure</h3>
          <p class="tech-description">Scalable cloud architecture with global deployment and edge computing capabilities</p>
        </div>
        <div class="tech-item">
          <h3 class="tech-title">Security Framework</h3>
          <p class="tech-description">Zero-trust architecture with end-to-end encryption and comprehensive access controls</p>
        </div>
        <div class="tech-item">
          <h3 class="tech-title">API Architecture</h3>
          <p class="tech-description">RESTful APIs with GraphQL support and comprehensive developer tools</p>
        </div>
        <div class="tech-item">
          <h3 class="tech-title">Data Processing</h3>
          <p class="tech-description">Real-time data processing with advanced analytics and business intelligence</p>
        </div>
        <div class="tech-item">
          <h3 class="tech-title">Monitoring & Observability</h3>
          <p class="tech-description">Comprehensive monitoring with performance metrics and predictive analytics</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Use Cases Section -->
  <section class="use-cases section">
    <div class="container">
      <h2 class="section-title">Industry Applications</h2>
      <p class="section-subtitle">Versatile AI solutions tailored for diverse professional environments and specialized use cases.</p>
      
      <div class="use-cases-grid">
        <div class="use-case">
          <h3 class="use-case-title">Customer Support</h3>
          <p class="use-case-description">Intelligent customer service automation with natural language understanding and seamless human handoff capabilities.</p>
          <ul class="use-case-features">
            <li>24/7 automated customer assistance</li>
            <li>Multi-language support and localization</li>
            <li>Ticket routing and priority management</li>
            <li>Knowledge base integration</li>
          </ul>
        </div>
        <div class="use-case">
          <h3 class="use-case-title">Content Creation</h3>
          <p class="use-case-description">Professional content generation for marketing, documentation, and communications with brand voice consistency.</p>
          <ul class="use-case-features">
            <li>Brand-consistent content generation</li>
            <li>Multi-format content creation</li>
            <li>SEO optimization and analytics</li>
            <li>Collaborative editing workflows</li>
          </ul>
        </div>
        <div class="use-case">
          <h3 class="use-case-title">Data Analysis</h3>
          <p class="use-case-description">Intelligent data processing and analysis with natural language queries and automated report generation.</p>
          <ul class="use-case-features">
            <li>Natural language data queries</li>
            <li>Automated report generation</li>
            <li>Predictive analytics and insights</li>
            <li>Data visualization and dashboards</li>
          </ul>
        </div>
        <div class="use-case">
          <h3 class="use-case-title">Internal Communications</h3>
          <p class="use-case-description">Streamlined internal communications with AI-powered assistance for meetings, documentation, and knowledge sharing.</p>
          <ul class="use-case-features">
            <li>Meeting summarization and notes</li>
            <li>Document search and retrieval</li>
            <li>Policy and procedure assistance</li>
            <li>Employee onboarding support</li>
          </ul>
        </div>
        <div class="use-case">
          <h3 class="use-case-title">Research & Development</h3>
          <p class="use-case-description">Advanced research assistance with literature review, data synthesis, and hypothesis generation for R&D teams.</p>
          <ul class="use-case-features">
            <li>Literature review and synthesis</li>
            <li>Patent research and analysis</li>
            <li>Technical documentation assistance</li>
            <li>Collaboration with research databases</li>
          </ul>
        </div>
        <div class="use-case">
          <h3 class="use-case-title">Training & Education</h3>
          <p class="use-case-description">Intelligent training programs with personalized learning paths and automated assessment capabilities.</p>
          <ul class="use-case-features">
            <li>Personalized learning experiences</li>
            <li>Automated assessment and feedback</li>
            <li>Progress tracking and analytics</li>
            <li>Interactive training simulations</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta section">
    <div class="container">
      <h2 class="cta-title">Ready to Transform Your Organization?</h2>
      <p class="cta-subtitle">Join hundreds of forward-thinking organizations that have already enhanced their productivity and communication with LibreChat's enterprise AI platform.</p>
      <div class="cta-actions">
        <a href="/register" class="btn btn-white">Start Free Trial</a>
        <a href="/login" class="btn btn-outline">Contact Sales</a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-brand">
          <div class="footer-logo">AI chatbot template</div>
          <p class="footer-description">Enterprise-grade AI platform designed for professional organizations seeking intelligent automation and enhanced productivity through advanced conversational AI technology.</p>
        </div>
        <div class="footer-section">
          <h4>Product</h4>
          <ul class="footer-links">
            <li><a href="#" class="footer-link">Features</a></li>
            <li><a href="#" class="footer-link">Pricing</a></li>
            <li><a href="#" class="footer-link">Integrations</a></li>
            <li><a href="#" class="footer-link">API Documentation</a></li>
            <li><a href="#" class="footer-link">Security</a></li>
          </ul>
        </div>
        <div class="footer-section">
          <h4>Company</h4>
          <ul class="footer-links">
            <li><a href="#" class="footer-link">About Us</a></li>
            <li><a href="#" class="footer-link">Careers</a></li>
            <li><a href="#" class="footer-link">Press</a></li>
            <li><a href="#" class="footer-link">Partners</a></li>
            <li><a href="#" class="footer-link">Contact</a></li>
          </ul>
        </div>
        <div class="footer-section">
          <h4>Resources</h4>
          <ul class="footer-links">
            <li><a href="#" class="footer-link">Documentation</a></li>
            <li><a href="#" class="footer-link">Help Center</a></li>
            <li><a href="#" class="footer-link">Community</a></li>
            <li><a href="#" class="footer-link">Blog</a></li>
            <li><a href="#" class="footer-link">Status</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p class="footer-text">© 2025 AI chatbot template by Ahmadjamil888. All rights reserved.</p>
        <div class="footer-legal">
          <a href="#" class="footer-link">Privacy Policy</a>
          <a href="#" class="footer-link">Terms of Service</a>
          <a href="#" class="footer-link">Cookie Policy</a>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>