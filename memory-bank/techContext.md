# Sun Doviz Technical Context

## Technology Stack
- HTML5
- Tailwind CSS (via CDN)
- Vanilla JavaScript
- Custom CSS
- PHP (for API proxy)

### Styling
1. Tailwind Configuration
   - Custom color palette
   - Extended animations
   - Custom font family (Montserrat)
   - Dark mode support
   - Responsive sizing utilities

2. Custom CSS
   - Gold gradient background
   - Zebra striping for tables
   - Custom header backgrounds
   - Dark mode adaptations
   - Backdrop blur effects

### Layout Structure
1. Container Organization
   - Responsive flex layout
   - Mobile-first design
   - Custom breakpoints
   - Dynamic spacing

2. Table Structure
   - Custom header styling
   - Zebra striping
   - Border opacity management
   - Icon integration

### Multilingual System
1. Implementation Approach
   - Modular translations.js file
   - Object-based translation storage
   - Standardized string keys
   - Language detection via navigator.language
   - LocalStorage for preference persistence

2. Text Rendering
   - DOM manipulation for text updates
   - Helper functions for common operations
   - Error handling and fallbacks
   - Consistent selector patterns

### Data Management
1. API Integration
   - PHP proxy to handle CORS
   - Error handling and logging
   - Response parsing and formatting
   - Timeout handling

2. Caching Strategy
   - LocalStorage for cached API responses
   - TTL-based cache expiration (5 minutes)
   - Fallback to cached data on API failure
   - Background refresh mechanism
   - Immediate cache usage on page load

### Theme System
1. System Preference Detection
   - window.matchMedia('(prefers-color-scheme: dark)')
   - Real-time preference change detection
   - Class-based theme application
   - Tailwind dark mode integration

### Typography System
1. Text Specifications
   - Montserrat font family
   - Size variations
   - Weight management
   - Tabular numbers

2. Timestamp Display
   - Icon integration
   - Small text size (11px)
   - Opacity controls

## Color System
1. Custom Colors
   - sun-gold: #D4AF37
   - sun-light-gold: #F5E1A4
   - sun-bronze: #3E2A0D
   - sun-dark-bronze: #2A1C08
   - sun-white: #F5F5F5
   - sun-red: #E74C3C
   - sun-green: #25D366

2. Theme Variables
   - Light/dark mode variants
   - Background colors
   - Text colors
   - Border colors

## Interactive Elements
1. Language Selector
   - TR/EN toggle interface
   - Visual active state
   - Click event handling
   - Context-appropriate button styling

2. Contact Buttons
   - Fixed positioning
   - Hover effects
   - Transition animations
   - Icon integration

## Development Patterns
- Mobile-first responsive design
- Progressive enhancement
- Semantic HTML
- Accessibility considerations
- Modular JavaScript organization
- Separation of concerns

### Styling
1. Tailwind Configuration
   - Custom color palette
   - Extended animations
   - Custom font family (Montserrat)
   - Dark mode support

2. Custom CSS
   - Gold gradient background
   - Zebra striping for tables
   - Custom header backgrounds
   - Dark mode adaptations

### Layout Structure
1. Container Organization
   - Responsive flex layout
   - Mobile-first design
   - Custom breakpoints
   - Backdrop blur effects

2. Table Structure
   - Custom header styling
   - Zebra striping
   - Border opacity management
   - Icon integration

### Typography System
1. Text Specifications
   - Montserrat font family
   - Size variations
   - Weight management
   - Tabular numbers

2. Timestamp Display
   - Icon integration
   - Small text size (11px)
   - Opacity controls

## Color System
1. Custom Colors
   - sun-gold: #D4AF37
   - sun-light-gold: #F5E1A4
   - sun-bronze: #3E2A0D
   - sun-dark-bronze: #2A1C08
   - sun-white: #F5F5F5
   - sun-red: #E74C3C
   - sun-green: #25D366

2. Theme Variables
   - Light/dark mode variants
   - Background colors
   - Text colors
   - Border colors

## Interactive Elements
1. Dark Mode Toggle
   - Local storage persistence
   - OS preference detection
   - Animated icons

2. Refresh Button
   - Fixed positioning
   - Hover effects
   - Focus states

## Development Patterns
- Mobile-first responsive design
- Progressive enhancement
- Semantic HTML
- Accessibility considerations 