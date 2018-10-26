import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { DovetrovComponent } from './dovetrov.component';

describe('DovetrovComponent', () => {
  let component: DovetrovComponent;
  let fixture: ComponentFixture<DovetrovComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ DovetrovComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(DovetrovComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
