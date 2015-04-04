from itertools import product
import json
import numpy

cube = numpy.array(range(1, 9)).reshape(2, 2, 2)

pcube = [
    cube[0  ,0  ,0  ],
    cube[0  ,0  ,0:2],
    cube[0  ,0:2,0:1],
    cube[0  ,0:2,0:2],
    cube[0:2,0:1,0:1],
    cube[0:2,0:1,0:2],
    cube[0:2,0:2,0:1],
    cube[0:2,0:2,0:2],
]

for (i, (a, b)) in enumerate(product(pcube, repeat=2), start=1):
    print 'public function testBsxfun{0:0>2d}()'.format(i)
    print '{'
    print '$a = {0};'.format(json.dumps(a.tolist()))
    print '$b = {0};'.format(json.dumps(b.tolist()))
    print '$expected = {0};'.format(json.dumps((a * b).tolist()))
    print '$actual = Bsxfun::bsxfun($this->times, $a, $b);'
    print '$this->assertEquals($expected, $actual);'
    print '}'
    print
