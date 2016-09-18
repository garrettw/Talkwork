Aspire will be the best general-purpose PHP app framework out there.

Currently targeting: PHP 5.6+

In an age of front-end JavaScript frameworks like Angular, Backbone, React, Vue,
Ember, ExtJs, and the like, where the code running on the server is just a dumb API,
I believe there is still a place alongside them for apps that run primarily on
purpose-built web servers. These apps are not complex; they more closely resemble
web pages than a piece of software, and a large portion of the web still looks
and works that way, and will remain that way for the foreseeable future. That's
not a bad thing. Aspire aims to give those webmasters a leg up.

# Defining characteristics (in priority order)
 - Action-Domain-Responder paradigm
 - Opinionated regarding use of best practices (I want this to be a model for the community)
 - True, full object-oriented code
 - Complete class modularity
 - Standards-compliant code that is easy to read, write, and understand
 - Performant and scalable
 - Behavior-driven development (BDD)
 - Small, limited-functionality core that is easily extensible
 - Use of libraries from the community unless a suitable one does not existing
 - Centered around Composer and Github

# File structure

- src/    (all core framework code)
- spec/   (testable code behavior specs)

# Planning

- ORM: Will include a data mapper. Candidates: Doctrine, Level-2/Maphper, Analogue
- Router: Will probably use nikic/FastRoute
- Templating engine candidates: thephpleague/plates, Level-2/Transphporm, Twig

# Contributing

Any code contributions are welcomed and requested. Help me make this thing awesome!