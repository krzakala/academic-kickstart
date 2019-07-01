---
title: "Inference in particle tracking experiments by passing messages between images"
date: 2010-04-01
publishDate: 2019-07-01T14:53:41.492657Z
authors: ["M. Chertkov", "L. Kroc", "F. Krzakala", "M. Vergassola", "L. Zdeborová"]
publication_types: ["2"]
abstract: "Methods to extract information from the tracking of mobile objects/particles have broad interest in biological and physical sciences. Techniques based on simple criteria of proximity in time-consecutive snapshots are useful to identify the trajectories of the particles. However, they become problematic as the motility and/or the density of the particles increases due to uncertainties on the trajectories that particles followed during the images’ acquisition time. Here, we report an efficient method for learning parameters of the dynamics of the particles from their positions in time-consecutive images. Our algorithm belongs to the class of message-passing algorithms, known in computer science, information theory, and statistical physics as belief propagation (BP). The algorithm is distributed, thus allowing parallel implementation suitable for computations on multiple machines without significant intermachine overhead. We test our method on the model example of particle tracking in turbulent flows, which is particularly challenging due to the strong transport that those flows produce. Our numerical experiments show that the BP algorithm compares in quality with exact Markov Chain Monte Carlo algorithms, yet BP is far superior in speed. We also suggest and analyze a random distance model that provides theoretical justification for BP accuracy. Methods developed here systematically formulate the problem of particle tracking and provide fast and reliable tools for the model’s extensive range of applications."
featured: false
publication: "*PNAS*"
tags: ["belief propagation", "message passing", "particle image velocimetry", "statistical inference", "turbulence"]
url_pdf: "https://www.pnas.org/content/107/17/7663"
doi: "10.1073/pnas.0910994107"
---

