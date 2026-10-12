<?php
/**
 * IEDC ACET - Centralized Events Data Array
 * Easily add, edit, or remove events here.
 */

$eventsData = [
    1 => [
        'id'                    => 1,
        'title'                 => 'Raising Capital & Managing Finance for Startups',
        'category'              => 'workshop',
        'category_label'        => 'Workshop • IEDC & IIC',
        'filter_tag'            => 'workshop entrepreneurship',
        'poster'                => 'assets/images/workshop-poster.jpeg',
        'icon'                  => '⌘',
        'badge_class'           => 'badge-workshop',
        'date'                  => '24 October 2026',
        'time'                  => '14:00 (2:00 PM IST)',
        'venue'                 => 'Hall A001, ACET Campus',
        'organizer'             => 'Innovation and Entrepreneurship Development Centre (IEDC) in association with Institution\'s Innovation Council (IIC)',
        'resource_person'       => 'Mr. B. Bala Senthil Kumar',
        'resource_designation'  => 'Founder & Managing Director – Ze Bancairo School of Banking & Ze Bancairo Virtual Incubation Space (ZeVIS)',
        'short_desc'            => 'Turning an idea into a financially viable venture: where the capital comes from, investor expectations, cash flow discipline, and incubation avenues.',
        'full_desc'             => 'This special workshop focuses on the financial foundations of launching and managing an early-stage startup. Led by Mr. B. Bala Senthil Kumar, attendees will understand how funding stages work, what angel investors and venture capitalists look for, how to construct realistic financial models, and how to maintain runway discipline.',
        'objectives'            => [
            'Understanding funding routes: bootstrapping, grants, angel networks, and VC funding.',
            'Pitch readiness: how to communicate numbers, revenue models, and growth projections.',
            'Cash flow and money management: budgeting, burn rate, and runway essentials.',
            'Connecting with incubation avenues and mentorship networks to accelerate startup ideas.'
        ],
        'eligibility'           => 'Open to all ACET students across all departments (CSE, ECE, Civil, Mechanical, AI/DS) and aspiring student innovators.',
        'deadline'              => '24 October 2026 before 13:00',
        'registration_url'      => 'https://whatsapp.com/channel/0029VaF9PEjCXC3G4OuW983o',
        'registration_status'   => 'open', // open, closed, or tba
        'contact'               => 'Coordinated by ACET IEDC & IIC Student Committee'
    ],
    2 => [
        'id'                    => 2,
        'title'                 => 'Hands-On Innovation & Prototyping Workshop',
        'category'              => 'workshop',
        'category_label'        => 'Workshop',
        'filter_tag'            => 'workshop',
        'poster'                => '', // uses banner styling if empty
        'icon'                  => '⌘',
        'badge_class'           => 'badge-workshop',
        'date'                  => 'To be announced',
        'time'                  => 'To be announced',
        'venue'                 => 'ACET Innovation Lab',
        'organizer'             => 'IEDC – ACET',
        'resource_person'       => 'To be announced',
        'resource_designation'  => '',
        'short_desc'            => 'Interactive bootcamp introducing design thinking methods, rapid wireframing, and early hardware/software testing models for student creators.',
        'full_desc'             => 'A hands-on workshop tailored for students with technical and non-technical ideas. The session covers rapid prototyping frameworks, testing assumptions with real users, and transforming conceptual sketches into testable prototypes.',
        'objectives'            => [
            'Learn the 5 stages of design thinking and customer problem validation.',
            'Create low-fidelity software wireframes and hardware block models.',
            'Receive structured peer review on technical feasibility and user experience.'
        ],
        'eligibility'           => 'All ACET undergraduate and postgraduate students.',
        'deadline'              => 'To be announced',
        'registration_url'      => '',
        'registration_status'   => 'tba',
        'contact'               => 'IEDC Coordinator, ACET'
    ],
    3 => [
        'id'                    => 3,
        'title'                 => 'Annual Inter-Departmental Hackathon Sprint',
        'category'              => 'hackathon',
        'category_label'        => 'Hackathon',
        'filter_tag'            => 'hackathon',
        'poster'                => '',
        'icon'                  => '⚡',
        'badge_class'           => 'badge-hackathon',
        'date'                  => 'To be announced',
        'time'                  => 'To be announced',
        'venue'                 => 'ACET Main Auditorium',
        'organizer'             => 'IEDC – ACET',
        'resource_person'       => 'To be announced',
        'resource_designation'  => '',
        'short_desc'            => 'A 24-hour collaborative sprint challenging teams of students from across engineering disciplines to build functional prototypes solving pressing societal challenges.',
        'full_desc'             => 'The flagship annual hackathon brings together students from computer science, electronics, mechanical, and civil engineering to collaborate on real-world problem statements submitted by industry partners and local communities.',
        'objectives'            => [
            'Promote cross-disciplinary team building and rapid problem solving.',
            'Build working code or functional hardware within a 24-hour sprint.',
            'Pitch prototypes to an evaluation panel of faculty and guest tech leads.'
        ],
        'eligibility'           => 'Teams of 2 to 4 students from Akshaya College of Engineering and Technology.',
        'deadline'              => 'To be announced',
        'registration_url'      => '',
        'registration_status'   => 'tba',
        'contact'               => 'IEDC Hackathon Committee, ACET'
    ],
    4 => [
        'id'                    => 4,
        'title'                 => 'Student Startup Pitch & Feedback Clinic',
        'category'              => 'entrepreneurship',
        'category_label'        => 'Startup Pitch',
        'filter_tag'            => 'entrepreneurship',
        'poster'                => '',
        'icon'                  => '🚀',
        'badge_class'           => 'badge-startup',
        'date'                  => 'To be announced',
        'time'                  => 'To be announced',
        'venue'                 => 'ACET Seminar Hall',
        'organizer'             => 'IEDC – ACET',
        'resource_person'       => 'To be announced',
        'resource_designation'  => '',
        'short_desc'            => 'Present your idea to faculty mentors and peer innovators. Receive constructive feedback on problem validation, target market fit, and presentation clarity.',
        'full_desc'             => 'An open feedback clinic where student entrepreneurs practice presenting 5-minute pitch decks. Mentors provide constructive critique on value proposition, unit economics, and slide presentation design.',
        'objectives'            => [
            'Practice verbal and visual presentation skills in a supportive environment.',
            'Refine target audience definitions and competitive differentiators.',
            'Prepare teams for external university and state-level startup challenges.'
        ],
        'eligibility'           => 'Any ACET student or team with an early-stage concept or prototype.',
        'deadline'              => 'To be announced',
        'registration_url'      => '',
        'registration_status'   => 'tba',
        'contact'               => 'IEDC Entrepreneurship Lead, ACET'
    ],
    5 => [
        'id'                    => 5,
        'title'                 => 'Intellectual Property & Patent Filing Awareness',
        'category'              => 'entrepreneurship',
        'category_label'        => 'Seminar',
        'filter_tag'            => 'entrepreneurship',
        'poster'                => '',
        'icon'                  => '◇',
        'badge_class'           => 'badge-seminar',
        'date'                  => 'To be announced',
        'time'                  => 'To be announced',
        'venue'                 => 'ACET Conference Room',
        'organizer'             => 'IEDC – ACET',
        'resource_person'       => 'To be announced',
        'resource_designation'  => '',
        'short_desc'            => 'An introductory awareness seminar explaining intellectual property basics, patent documentation, copyright for engineering projects, and research disclosures.',
        'full_desc'             => 'Designed to teach engineering students how to protect novel hardware and software inventions. Topics include prior art search techniques, drafting provisional patent applications, and institutional IP guidelines.',
        'objectives'            => [
            'Demystify patents, trademarks, copyrights, and trade secrets for engineers.',
            'Understand how to conduct preliminary searches on patent databases.',
            'Learn the steps required to file an institutional patent through college support.'
        ],
        'eligibility'           => 'All ACET students and final-year project teams.',
        'deadline'              => 'To be announced',
        'registration_url'      => '',
        'registration_status'   => 'tba',
        'contact'               => 'IEDC Faculty Coordinator, ACET'
    ],
    6 => [
        'id'                    => 6,
        'title'                 => 'IoT & Embedded Systems Hands-On Lab',
        'category'              => 'workshop',
        'category_label'        => 'Workshop',
        'filter_tag'            => 'workshop',
        'poster'                => '',
        'icon'                  => '⚙️',
        'badge_class'           => 'badge-workshop',
        'date'                  => 'To be announced',
        'time'                  => 'To be announced',
        'venue'                 => 'ACET IoT & Robotics Lab',
        'organizer'             => 'IEDC – ACET',
        'resource_person'       => 'To be announced',
        'resource_designation'  => '',
        'short_desc'            => 'Practical session covering sensor integration, microcontroller programming, and cloud telemetry for connected engineering solutions.',
        'full_desc'             => 'An intensive laboratory workshop teaching students how to bridge hardware sensors with cloud dashboards using ESP32, MQTT protocols, and simple REST APIs.',
        'objectives'            => [
            'Interface analog and digital sensors with microcontroller boards.',
            'Publish real-time telemetry data over wireless networks to cloud brokers.',
            'Build automated triggers and alerting mechanisms based on sensor threshold rules.'
        ],
        'eligibility'           => 'Students with basic programming interest across all engineering branches.',
        'deadline'              => 'To be announced',
        'registration_url'      => '',
        'registration_status'   => 'tba',
        'contact'               => 'IEDC Technical Lead, ACET'
    ]
];
